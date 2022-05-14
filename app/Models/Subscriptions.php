<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriptions extends Model
{
    use HasFactory;

    public function Cards()
    {
        return $this->belongsTo(Cards::class);
    }

    public function Notifications()
    {
        return $this->belongsTo(Notifications::class);
    }
}
