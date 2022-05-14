<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boards extends Model
{
    use HasFactory;

    public function Users()
    {
        return $this->belongsTo(Users::class);
    }

    public function Columns()
    {
        return $this->hasMany(Columns::class);
    }
}
