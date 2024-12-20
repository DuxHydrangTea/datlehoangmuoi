<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\UserRepositoryInterface;
use App\Models\User;
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function withoutMainAdmin()
    {
        return $this->model->withoutMainAdmin()->get();
    }
    public function findExistedUSer($column, $value)
    {
        return $this->model->where($column, $value)->first();
    }
}