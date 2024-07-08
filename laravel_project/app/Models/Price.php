<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;
    public $primaryKey = 'id_rate';
    protected $table = "rate";
    protected $fillable = [
        'id_package', 'nama_rate', 'date_from', 'date_end', 'jml_harian', 'instant_rate '
    ];

    public function package() {
        return $this->hasOne(Packages::class,'id_package', 'id_package');
    }
}
