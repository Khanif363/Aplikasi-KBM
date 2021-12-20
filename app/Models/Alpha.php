<?php

namespace App\Models;

use App\Models\Hari;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alpha extends Model
{
    use HasFactory;
    protected $guarded = [];




    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hari()
    {
        return $this->belongsTo(Hari::class,'hari_id');
    }

    public function tanggal()
    {
        return $this->belongsTo(Tanggal::class);
    }
    
}
