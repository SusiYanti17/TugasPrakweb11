<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pasien';
// table adalah property ;aravel yang didalam nya terkoneksi dengan 
// nama table yang mau kita tampilkan data nya,
// tetapi hanya dapat di akses di dalam class model tersebut ataupun turunan nya

protected $fillable = ['id','kode','nama','tmp-lahir','tgl_lahir','gender','email','alamat','kelurahan_id'];

// fillable adalah variabel dalam model eloquent yang tugasnya
// membatasi kolom mana yang dapat di isi atau di input
}
