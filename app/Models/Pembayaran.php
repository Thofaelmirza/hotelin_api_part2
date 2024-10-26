<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'jumlah_pembayaran',
        'metode_pembayaran',
        'tanggal_pembayaran',
        'status_pembayaran',
    ];
}
