<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;
    //mapping ke tabel
    protected $table = 'metodepembayaran';
    
    //mapping ke kolom/fieldnya
    protected $fillable = ['metodePembayaran'];

}
