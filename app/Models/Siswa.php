<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $primaryKey = "nis";
    public $incrementing = false;
    protected $fillable = ['nis','nama','alamat'];
    use HasFactory;

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function rapor()
    {
        return $this->hasMany(Rapor::class,'nis_siswa', 'nis');
    }
}
