<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
    protected $table = "rapor";
    protected $primaryKey = ["nis_siswa", "id_mapel"];
    protected $fillable = ['nis_siswa','id_mapel','nilai', 'huruf' ,'predikat'];
    public $incrementing = false;
    use HasFactory;

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'id_mapel','id');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'nis_siswa','nis');
    }
}
