<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table='postes';

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function files()
    {
        return $this->hasMany(File::class, 'post_id');
    }
    public function comments()
    {
        return $this->hasMany(Comment::class, 'post_id');
    }
}
