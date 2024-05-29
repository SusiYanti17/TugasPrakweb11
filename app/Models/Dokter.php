<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $table = 'dokter';
// table adalah property ;aravel yang didalam nya terkoneksi dengan 
// nama table yang mau kita tampilkan data nya,
// tetapi hanya dapat di akses di dalam class model tersebut ataupun turunan nya

protected $fillable = ['id','nama','gender','tmp_lahir','tgl_lahir','kategori','telpon','alamat','unit_kerja_id'];

// fillable adalah variabel dalam model eloquent yang tugasnya
// membatasi kolom mana yang dapat di isi atau di input
}

