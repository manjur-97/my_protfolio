<?php

namespace App\Repositories;

use App\Models\SocialMedia;
use App\Repositories\Interfaces\SocialMediaRepositoryInterface;

class SocialMediaRepository implements SocialMediaRepositoryInterface
{
    public function all()
    {
        return SocialMedia::all();
    }

    public function find($id)
    {
        return SocialMedia::find($id);
    }

    public function create(array $data)
    {
        return SocialMedia::create($data);
    }

    public function update($id, array $data)
    {
        $item = SocialMedia::find($id);
        return $item ? $item->update($data) : false;
    }

    public function delete($id)
    {
        $item = SocialMedia::find($id);
        return $item ? $item->delete() : false;
    }

  
}
