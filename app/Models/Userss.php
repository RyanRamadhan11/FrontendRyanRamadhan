<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userss extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'users';
    //mapping ke kolom/fieldnya
    protected $fillable = ['email','name','password','role','isactive'];

    //relasi one to many ke tabel pesanan
    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }

    public function testimoni()
    {
        return $this->hasOne(Testimoni::class);
    }
}
