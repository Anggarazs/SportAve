<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataLapangan extends Model
{
    use HasFactory;
    protected $table ='data_lapangans';
    protected $primaryKey='id';
    protected $fillable = [
        'id',
        'nama',
        'jenis_lapangan',
        'harga',
        'foto_lapangan'
    ];

}
