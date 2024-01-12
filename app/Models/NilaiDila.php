<?php

namespace App\Models;

use App\Models\kurikulum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NilaiDila extends Model
{
    use HasFactory;
    protected $table ="nilaidilas";
    protected $primaryKey ="id";

    public function guru(){
        return $this->belongsTo(Guru::class, 'id_guru'); //id guru fk
    }

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }
   
    public function kurikulum(){
        return $this->belongsTo(kurikulum::class, 'id');
    }
}
