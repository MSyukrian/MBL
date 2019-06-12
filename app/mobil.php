<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = 'tbl_mobil';
    protected $fillable = ['NoPlat','Nama','Warna','TglKeluar','Harga'];
}
