<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cards extends Model
{
    use HasFactory;

    public function columns()
    {
        return $this->belongsTo(Columns::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscriptions::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notifications::class);
    }

}
