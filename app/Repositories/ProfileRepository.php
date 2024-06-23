<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Repositories\Interfaces\ProfileRepositoryInterface;

class ProfileRepository implements ProfileRepositoryInterface
{
    public function all()
    {
        return Profile::all();
    }

    public function find($id)
    {
        return Profile::find($id);
    }
    public function find_letest_data()
    {
        return Profile::latest()->first();
    }

    public function create(array $data)
    {
        return Profile::create($data);
    }

    public function update($id, array $data)
    {
        $item = Profile::find($id);
        return $item ? $item->update($data) : false;
    }

    public function delete($id)
    {
        $item = Profile::find($id);
        return $item ? $item->delete() : false;
    }

    public function completed($id)
    {
        $item = Profile::find($id);
        if ($item) {
            $item->completed = true; // Assuming you have a 'completed' column
            return $item->save();
        }
        return false;
    }
}
