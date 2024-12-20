<?php
namespace App\Repositories;
interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function findBySlug($slug);
    public function getAllPublic();
    public function getPostsByCate($category_id);
    public function getPostsByListCate($array_categories);
    public function getPostByType($type);
    public function findInTrash($id);
    public function searchByQuery($query);
}