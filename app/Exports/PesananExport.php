<?php

namespace App\Exports;

use App\Models\Pesanan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class PesananExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Pesanan::all();
        $ar_pesanan = DB::table('pesanan')
        ->join('users', 'users.id', '=', 'pesanan.users_id')
        ->join('meja', 'meja.id', '=', 'pesanan.meja_id')
        ->join('menu', 'menu.id', '=', 'pesanan.menu_id')
        ->select('pesanan.id','pesanan.kodePesanan','menu.namaMenu','pesanan.waktuPesan','pesanan.TotalPesan',
        'pesanan.TotalHarga','users.name','meja.kodeMeja','pesanan.statusPesanan')
        ->get();
        return $ar_pesanan;
    }

    public function headings(): array
    {
        return ["ID", "Kode Pesanan", "Nama Menu", "Waktu Pesan", "Total Pesan", "Total Harga", 
        "Nama Pemesan", "Kode Meja", "Status Pesanan"];
    }
}
