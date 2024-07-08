<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $primaryKey='id_package';
    protected $table="package";
    protected $fillable = [
        'nama_package','kode_package','desk_package','img_package','nm_lokasi','id_comunity'
    ];

    public function package(){
        return $this->belongsTo(Comunity::class,'id_comunity','id_comunity');
    }

    public function harga(){
        return $this->hasOne(Price::class,'id_package','id_package');
    }
}
