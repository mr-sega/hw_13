<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifications extends Model
{
    use HasFactory;

    public function Cards()
    {
        return $this->belongsTo(Cards::class);
    }

    public function Subsciptions()
    {
        return $this->belongsTo(Subscriptions::class);
    }
}
