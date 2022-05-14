<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    public function Comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function Cards()
    {
        return $this->hasMany(Cards::class);
    }

    public function Subscription()
    {
        return $this->hasMany(Subscriptions::class);
    }

    public function boards()
    {
        return $this->hasMany(Boards::class);
    }
}
