<?php

namespace App\Models;

use App\Models\Alpha;
use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Hari extends Model
{
    use HasFactory;
    protected $guarded = [];

    




    public function alpha()
    {
        return $this->hasMany(Alpha::class);
    }

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class);
    }
}
