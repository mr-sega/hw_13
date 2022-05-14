<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Columns extends Model
{
    use HasFactory;

    public function Boards()
    {
        return $this->belongsTo(Boards::class);
    }

    public function Cards()
    {
        return $this->hasMany(Cards::class);
    }
}
