<?php

namespace App\Models;

use App\Models\User;
use App\Models\Mapel;
use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kelas extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function jadwals()
    {
        return $this->hasMany(Jadwal::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'id');
    }

    public function mapels()
    {
        return $this->hasMany(Mapel::class);
    }
}
