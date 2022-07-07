<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = "mapel";
    protected $primaryKey = "id";
    protected $fillable = ['id','nama','kkm', 'jenis'];
    public $incrementing = false;
    use HasFactory;

    public function rapor()
    {
        return $this->hasMany(Rapor::class);
    }

}
