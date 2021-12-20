<?php

namespace App\Models;

use App\Models\Hari;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Waktu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function waktu()
    {
        return $this->belongsTo(Waktu::class, 'waktu_id');
    }

    public function hari()
    {
        return $this->belongsTo(Hari::class,'hari_id');
    }
}
