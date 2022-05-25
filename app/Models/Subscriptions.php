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

    public function notifications()
    {
        return $this->belongsToMany(Notifications::class, 'notification_subscription', 'notification_id', 'subscription_id');
    }
}
