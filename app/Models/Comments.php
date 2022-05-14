<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsTo(Users::class);
    }

    public function Cards()
    {
        return $this->belongsTo(Cards::class);
    }
}
