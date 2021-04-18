<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * Get the comments for the blog post.
     */
    public function comentario()
    {
        return $this->hasMany(Comentario::class);
    }
}
