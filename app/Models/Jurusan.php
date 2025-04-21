<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $table = 'jurusan'; //definisikan agar mengambil data pada tabel jurusan
    protected $fillable = ['nama']; // definiskan agar data nama di isi (fill)
}
