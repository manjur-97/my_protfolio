<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function all()
    {
        return Post::with(['category', 'profile', 'files'])->get();
    }

    public function find($slog)
    {
        return Post::where("slog",$slog)->first();
    }

    public function create(array $data)
    {
        return Post::create($data);
    }

    public function update($id, array $data)
    {
        $item = Post::find($id);
        return $item ? $item->update($data) : false;
    }

    public function delete($id)
    {
        $item = Post::find($id);
        return $item ? $item->delete() : false;
    }

    public function completed($id)
    {
        $item = Post::find($id);
        if ($item) {
            $item->completed = true; // Assuming you have a 'completed' column
            return $item->save();
        }
        return false;
    }

    public function views_count($id)
    {
        $post = Post::find($id);
        
        $post->views= ++$post->views;
        return  $post->save();
       
    }

}
