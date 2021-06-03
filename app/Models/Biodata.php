<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{

    protected $table = 'users';
    Protected $fillable = ['tahun_masuk','tahun_lulus','email','hp','alamat','pekerjaan','tempat_bekerja'];

    // public function jurusan ()
    // {
    //     return $this->belongsTo(Jurusan::class);
    // }
    
}