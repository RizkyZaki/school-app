<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materi;

class Mapel extends Model
{
    use HasFactory;
    protected $table = 'mapel';
    protected $guarded = ['id'];

    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_mapel');
    }
}
