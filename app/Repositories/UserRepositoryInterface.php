<?php
namespace App\Repositories;

interface UserRepositoryInterface extends BaseRepositoryInterface
{
    public function withoutMainAdmin();
    public function findExistedUSer($column, $value);
}