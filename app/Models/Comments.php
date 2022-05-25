<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function Cards()
    {
        return $this->hasOne(Cards::class, 'id', 'card_id');
    }
}
