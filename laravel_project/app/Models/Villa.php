<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Villa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_package';
    protected $table = "package";
    protected $fillable = [
        'nama_package','kode_package','desk_package','img_package','nm_lokasi','id_comunity'
    ];

    static function getVilla(){
        $return=DB::table('package')
        ->join('comunity','package.id_comunity','=', 'comunity.id_comunity');
        return $return;
    }
}
