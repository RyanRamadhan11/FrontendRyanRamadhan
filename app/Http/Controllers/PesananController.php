<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\Pesanan;
//tambahan
use App\Models\Userss;
use App\Models\Meja;
use App\Models\PostsMenu;

use DB;
use PDF;

//excel
use App\Exports\PesananExport;
use Maatwebsite\Excel\Facades\Excel;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan seluruh data
        $pesanan = Pesanan::orderBy('id', 'DESC')->get();
        return view('Pesanan.index',compact('pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ambil master untuk dilooping di select option
        $ar_users = Userss::all();
        $ar_meja = Meja::all();
        $ar_menu = PostsMenu::all();
        $ar_status = ['Pesanan Sedang Di Proses'];

        //arahkan ke form input data
        return view('Pesanan.form',compact('ar_users','ar_meja','ar_menu','ar_status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodePesanan' => 'required|max:4',
            'waktuPesan' => 'required|max:45',
            'TotalPesan' => 'required|max:45',
            'users_id' => 'required|max:45',
            'meja_id' => 'required|max:45',
            'menu_id' => 'required|max:45',
            'statusPesanan' => 'required|max:45',
        ],
        [
            'kodePesanan.required'=>'Kode Pesanan Wajib di Isi',
            'kodePesanan.max'=>'Kode Pesanan Maksimal 4 Karakter',
            'waktuPesan.required'=>'Waktu Pesan Wajib di Isi',
            'waktuPesan.max'=>'Waktu Pesan Maksimal 45 Karakter',
            'TotalPesan.required'=>'Total Pesan Wajib di Isi',
            'TotalPesan.max'=>'Total Pesan Maksimal 45 Karakter',

            'users_id.required'=>'User ID Wajib di Isi',
            'users_id.max'=>'User ID Maksimal 45 Karakter',
            'meja_id.required'=>'Meja ID Wajib di Isi',
            'meja_id.max'=>'Meja ID Maksimal 45 Karakter',
            'menu_id.required'=>'Menu ID Wajib di Isi',
            'menu_id.max'=>'Menu ID Maksimal 45 Karakter',
            'statusPesanan.required'=>'Status Pesanan Wajib di Isi',
            'statusPesanan.max'=>'Status Pesanan Maksimal 45 Karakter',
        ]
        );
    
        Pesanan::create($request->all());
    
        return redirect()->route('pesanan.index')
                        ->with('success','Data Pesanan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = Pesanan::find($id);
        return view('Pesanan.detail',compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Pesanan::find($id);
        return view('Pesanan.form_edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            // 'kodePesanan' => 'required|max:4',
            'waktuPesan' => 'required|max:45',
            'TotalPesan' => 'required|numeric|max:45',

            'users_id' => 'required|max:45',
            'meja_id' => 'required|max:45',
            'menu_id' => 'required|max:45',
            'statusPesanan' => 'required|max:45',
        ]);

        //lakukan update data dari request form edit
        DB::table('pesanan')->where('id',$id)->update(
            [
                // 'kodePesanan'=>$request->kodePesanan,
                'waktuPesan'=>$request->waktuPesan,
                'TotalPesan'=>$request->TotalPesan,

                'users_id'=>$request->users_id,
                'meja_id'=>$request->meja_id,
                'menu_id'=>$request->menu_id,
                'statusPesanan'=>$request->statusPesanan,
                'updated_at'=>now(),
            ]);
    
        return redirect()->route('pesanan.index')
                        ->with('success','Data Pesanan Berhasil Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pesanan::where('id',$id)->delete();
        //setelah itu baru hapus data pesanan
        return redirect()->route('pesanan.index')
                        ->with('success','Data Pesanan Berhasil Dihapus');
    }

    public function pesananPDF()
    {
        $pesanan = Pesanan::all(); 
        //dd($pegawai);
        $pdf = PDF::loadView('Pesanan.pesananPDF',['pesanan'=>$pesanan]);
        return $pdf->download('data_pesanan.pdf');
    }

    public function pesananExcel() 
    {
        return Excel::download(new PesananExport, 'data_pesanan.xlsx');
    }
}
