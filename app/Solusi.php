<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solusi extends Model
{
    protected $table='solusi';
    protected $fillable = ['id','penyakit_id','solusi_medis','solusi_non_medis','keterangan'];
}
