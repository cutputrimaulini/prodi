<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    //
    //bilang ke lara kalo dia harus pake table di bawah ini
   protected $table = 'pengajuan_judul';

   protected $fillable = ['status'];
   
   //terima semua inputan dari view
   protected $guarded=[];
}
