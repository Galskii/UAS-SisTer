<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunity extends Model
{
    use HasFactory;
    public $primaryKey='id_comunity';
    protected $table="comunity";
    protected $fillable = [
        'id_comunity','nm_comunity','desk_comunity','id_village','logo_comunity','kontak'
    ];

    public function packages(){
        return $this->hasMany(Packages::class,'id_comunity','id_comunity');
    }
}
