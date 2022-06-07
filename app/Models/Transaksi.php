<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

     protected $fillable = [
        'user_id',
        'nama_transaksi',
        'jumlah_transaksi',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
