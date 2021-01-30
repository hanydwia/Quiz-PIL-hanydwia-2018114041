<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliahs extends Model
{
    use HasFactory;

    protected $guarded = ['name'];

    public function absens()
    {
        return $this->hasMany('App\Models\Absens');
    }
}
