<?php
namespace App\Repositories\Eloquent;
use App\Repositories\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Schema;
use Storage;
class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    /**
     * Lấy tất cả bản ghi có deleted_at NULL nếu có
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->all();
    }
    /**
     * Lấy bản ghi có theo $id
     * @param mixed $id
     * @return Model|Model[]|\Illuminate\Database\Eloquent\Collection|null
     */
    public function find($id)
    {
        return $this->model->find($id);
    }
    /**
     * Tạo mới bản ghi
     * @param array $data
     * @return Model
     */
    public function create(array $data)
    {

        return $this->model->create($data);
    }

    /**
     * Cập nhật bản ghi
     * @param mixed $id
     * @param array $data
     * @return bool|Model|Model[]|\Illuminate\Database\Eloquent\Collection
     */
    public function update($id, array $data)
    {
        $record = $this->model->find($id);
        if ($record) {
            $record->update($data);
            return $record;
        }
        return false;
    }
    /**
     * Lấy tất cả bản ghi kể cả bản ghi đã @XOÁ_MỀM
     * @return mixed
     */
    public function withTrashed()
    {
        return $this->model->withTrashed();
    }
    /**
     * Khôi phục bản ghi đã @XOÁ_MỀM
     * @param mixed $id
     * @return bool
     */
    public function restore($id)
    {
        $record = $this->model->withTrashed()->find($id);
        if ($record) {
            $record->restore();
            return true;
        }
        return false;
    }

    /**
     * Xoám mềm bản ghi nếu ở chế độ xoá mềm và xoá vĩnh viễn nếu ở chế độ bình thường
     * Nếu ở chế độ bình thường thì sẽ đi kèm xoá file
     * @param mixed $id
     * @return bool
     */
    public function soft_delete($id)
    {
        try {
            $record = $this->model->find($id);
            // dd($this->hasSoftDelete());
            if (!$this->hasSoftDelete()) {
                $this->deleteFilesFromColumns($record);
            }
            $record->delete();
            return true;
        } catch (\Throwable $th) {

            return false;
        }
    }


    /**
     * Trả về true nếu Bảng ở chế độ @XOÁ_MỀM
     * @return bool
     */
    public function hasSoftDelete()
    {
        return Schema::hasColumn($this->model->getTable(), 'deleted_at');
    }

    /**
     * Trả về true nếu Bảng tồn tại cột có tên $column
     * @param mixed $column
     * @return bool
     */
    public function hasColumn($column)
    {

        return Schema::hasColumn($this->model->getTable(), $column);
    }

    /**
     * Trả về mảng string là tên các cột có kiểu varchar dành riêng cho upload File
     * @return string[]
     */
    public function hasFileColumns()
    {
        $columnsToCheck = ['avatar', 'thumbnail', 'file', 'image', 'audio', 'audio_file'];
        $existingColumns = [];

        foreach ($columnsToCheck as $column) {
            if ($this->hasColumn($column)) {
                $existingColumns[] = $column;
            }
        }
        return $existingColumns;
    }
    /**
     * Xoá tất cả các file thuộc về bản ghi $record
     * @param mixed $record
     * @return void
     */
    public function deleteFilesFromColumns($record)
    {
        $existingColumns = $this->hasFileColumns();
        foreach ($existingColumns as $column) {
            if ($record[$column]) {
                // dd(Storage::files('public/images'));
                Storage::delete('public/' . $record[$column]);
            }
        }
    }

    /**
     * Xoá cứng (vĩnh viễn) bản ghi 
     * @param mixed $id
     * @return bool
     */
    public function force_delete($id)
    {
        $record = $this->model->withTrashed()->find($id);
        $this->deleteFilesFromColumns($record);
        if ($record) {
            try {

                $record->forceDelete();

            } catch (\Throwable $th) {
                return false;
            }

            return true;
        }
        return false;

    }






    public function upload_as($file)
    {
        try {
            $ranInt = random_int(1, 10000000);
            $name_file = $ranInt . $file->getClientOriginalName();
            $path = $file->storeAs("public/images", $name_file);
            return 'images/' . $name_file;
        } catch (\Throwable $th) {

            return "";
        }
    }

    public function upload_audio_as($file)
    {
        try {
            $ranInt = random_int(1, 10000000);
            $name_file = $ranInt . $file->getClientOriginalName();

            $path = $file->storeAs("public/audios", $name_file);
            return 'audios/' . $name_file;
        } catch (\Throwable $th) {

            return "";
        }
    }
}