<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'kelas';
    protected $guarded = ['id'];


    public function materi()
    {
        return $this->hasMany(Materi::class, 'id_kelas');
    }
}
