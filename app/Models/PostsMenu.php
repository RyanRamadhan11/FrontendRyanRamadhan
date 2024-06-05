<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsMenu extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'postsMenu';
    //mapping ke kolom/fieldnya
    protected $fillable = ['namaMenu','status','harga','stok','foto','kategori_id'];

    
    //relasi  one to many ke tabel detailpesanan
    public function detailpesanan()
    {
        return $this->hasMany(DetailPesanan::class);
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }

    //tabel relasi merujuk/merefer ke tabel master/acuan
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
