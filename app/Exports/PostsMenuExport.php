<?php

namespace App\Exports;

use App\Models\Menu;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class PostsMenuExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // return Menu::all();
        $ar_menu = DB::table('postMenu')
        ->join('kategori', 'kategori.id', '=', 'postMenu.kategori_id')
        ->select('postMenu.namaMenu','postMenu.status','postMenu.harga',
                'postMenu.stok','kategori.namaKategori','postMenu.foto')
        ->get();
        return $ar_menu;
    }

    public function headings(): array
    {
        return ["Nama Menu", "Status", "Harga", "Stok","Nama Kategori","Foto"];
    }
}
