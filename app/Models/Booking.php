<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table ='bookings';

    protected $fillable = [
        'id',
        'nama',
        'email',
        'nomor',
        'tanggal_booking',
        'awal',
        'akhir',
        'data_lapangan_id',
        'bayar',
        'user_id'
    ];
    /**
     * Get the user associated with the Booking
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function Transaksi()
    {
        return $this->hasOne(Transaksi::class);
    }
    public function Lapangan()
    {
        return $this->belongsTo(dataLapangan::class, 'data_lapangan_id', 'id');
    }
}
