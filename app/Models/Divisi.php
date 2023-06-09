<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'divisi'; //pemanggilan nama table
    protected $primarykey ='id'; //ini pemanggilan id atau primary keynya
    protected $fillable = ['nama']; //ini pemanggilan kolom
    
    
    public function pegawai(){
        return $this->hasMany(Pegawai::class); //memanggil reasi antara table divisi dengan table pegawai
    }

}

