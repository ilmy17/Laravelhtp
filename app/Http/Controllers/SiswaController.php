<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //ini adalah tempat edit untuk fungsi dan perintah
    public function dataSiswa(){
        $siswa1 ='Fawwaz'; $asal1 = 'jakarta';
        $siswa2 ='Inayaa'; $asal2 = 'Depok';
        return view ('data_siswa',
        compact('siswa1','siswa2','asal1','asal2')
    );
    }
}
