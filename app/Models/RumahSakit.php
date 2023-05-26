<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    public $table ='tb_rumah_sakit';
    protected $primaryKey ='id_rs';

    protected $fillable=['nama_rumah_sakit','alamat', 'email', 'telepon'];
}
