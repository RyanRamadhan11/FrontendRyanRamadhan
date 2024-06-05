<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    //mapping ke tabel
    protected $table = 'pesanan';
    //mapping ke kolom/fieldnya
    protected $fillable = ['kodePesanan','menu_id','waktuPesan','TotalPesan','TotalHarga','users_id',
                            'meja_id','statusPesanan'];

    //relasi  one to many ke tabel detailpesanan
    public function detailpesanan()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function users()
    {
        return $this->belongsTo(Userss::class);
    }

    public function meja()
    {
        return $this->belongsTo(Meja::class);
    }

    public function menu()
    {
        return $this->belongsTo(PostsMenu::class);
    }

}
