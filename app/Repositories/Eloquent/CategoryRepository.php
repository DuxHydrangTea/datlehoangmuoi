<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\CategoryRepositoryInterface;
class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
}