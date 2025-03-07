<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    public function update($id, array $data);
    public function test();
}
