<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsToMany(User::class, 'boards_user', 'boards_id', 'users_id');
    }

    public function author()
    {
        return $this->hasOne(User::class, 'author_id');
    }

    public function Columns()
    {
        return $this->hasMany(Columns::class);
    }
}
