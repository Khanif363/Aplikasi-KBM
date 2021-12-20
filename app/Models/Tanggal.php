<?php

namespace App\Models;

use App\Models\Tanggal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tanggal extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function alphas()
    {
        return $this->hasMany(Tanggal::class, 'tanggal_id');
    }
}
