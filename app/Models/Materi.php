<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mapel;
use App\Models\User;
use App\Models\Kelas;

class Materi extends Model
{
    use HasFactory;
    protected $table = 'materi';
    protected $guarded = ['id'];
    protected $with = ['mapel', 'kelas', 'user'];

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
