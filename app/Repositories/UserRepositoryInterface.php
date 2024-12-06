<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function register(array $credentials);
    public function login(array $credentials);
    public function logout($role);

    public function getBlogList();
    public function getBlogData($id);
}