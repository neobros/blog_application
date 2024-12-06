<?php

namespace App\Repositories;

interface AdminRepositoryInterface
{
    public function login(array $credentials);
    public function logout($role);

    public function getBlogList();
    public function getBlogData($id);
}