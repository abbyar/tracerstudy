<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Alumni extends Model
{
    protected $table = 'users';
    Protected $fillable = ['status','nama','nim','jurusan_id','perguruan_tinggi','tgl'];

    public function jurusan ()
    {
        return $this->belongsTo(Jurusan::class);
    }
    use HasFactory;
}
