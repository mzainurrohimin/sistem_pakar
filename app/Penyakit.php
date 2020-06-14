<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    // protected $guarded=[];
    protected $table='penyakit';
    protected $fillable = ['id','nama_penyakit','nama_medis','keterangan'];

}
