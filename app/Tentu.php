<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentu extends Model
{
    protected $table='tentu';
    protected $fillable=['id','gejala_id','penyakit_id'];
    public function gejala(){
        return $this->belongsTo(Gejala::class,'gejala_id','id');
    }
    public function penyakit(){
        return $this->belongsTo(Penyakit::class,'penyakit_id','id');
    }
    public function solusi(){
        return $this->belongsTo(Solusi::class,'solusi_id','id');
    }
}
