<?php

namespace App\Repositories\Interfaces;

interface ProfileRepositoryInterface
{
    public function all();
    public function find($id);
    public function find_letest_data();
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function completed($id);
}