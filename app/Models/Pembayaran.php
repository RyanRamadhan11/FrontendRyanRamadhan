<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'pembayaran';
    //mapping ke kolom/fieldnya
    protected $fillable = ['users_id','metodePembayaran_id','tanggal','pesanan_id',
                            'buktiPembayaran','metodePembayaran','statusPembayaran'];

    //relasi one to one ke tabel pesanan
    public function pesanan()
    {
        return $this->belongsTo(Pesanan::class);
    }

    public function users()
    {
        return $this->belongsTo(Userss::class);
    }

    
}
