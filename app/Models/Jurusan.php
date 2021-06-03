<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    // protected $table = 'jurusan';
    protected $primaryKey = 'id';
    Protected $fillable = ['id','kode_jurusan','nama_jurusan'];

    public function alumni ()
    {
        return $this->hasMany(Alumni::class);
    }
    use HasFactory;
}
