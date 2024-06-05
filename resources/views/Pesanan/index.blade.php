@extends('Admin.home')
@section('content')
<div class="card mb-4">
    <h2 style="margin: 10px 0px 10px 10px; ">Home</h2>
        <nav>
            <ol class="breadcrumb mb-4 " style="margin-left: 10px;">
                <li class="breadcrumb-item"><a style="text-decoration: none; color: black;" href="{{ url('pesanan') }}">Data Master</a></li>
                <li class="breadcrumb-item active">Pesanan</li>
            </ol>
        </nav>
    <div class="card-header fw-bold">
        <i class="fa fa-folder" style="margin-right:4;"></i>
        DATA PESANAN
    </div>

    <div class="mt-4" style="width:550px; margin-left:18px;">
        <a class="btn btn-sm" title="Tambah Pesanan" style="background-color: blue; color: white;"
            href=" {{ route('pesanan.create') }}">
            <i class="fa fa-plus-circle"></i> Add Pesanan
        </a>

        <a class="btn btn-danger btn-sm" title="Export to PDF Pesanan" 
            href=" {{ url('pesanan-pdf') }}">
            <i class="fas fa-file-pdf"></i> Export to PDF
        </a>

        <a class="btn btn-success btn-sm" title="Export to Excel Pesanan" 
            href=" {{ url('pesanan-excel') }}">
            <i class="fas fa-file-excel"></i> Export to Excel
        </a>
    </div>
    <br />
            @if ($message = Session::get('success'))
            <div class="alert alert-success mt-5">
                <p>{{ $message }}</p>
            </div>
            @endif
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Pesanan</th>
                    <th>Nama Menu</th>
                    <th>Waktu Pesan</th>
                    <th>Total Pesan</th>
                    <th>Total Harga</th>
                    <th>Nama Pemesan</th>
                    <th>Kode Meja</th>
                    <th>Status Pesanan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php 
					$no= 1; 
						
					function rupiah($angka){
                        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                        return $hasil_rupiah;
                    }
				@endphp

                @foreach($pesanan as $row)

                @php
                    $harga = $row->TotalPesan * $row->menu->harga;
                @endphp
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->kodePesanan }}</td>
                    <td>{{ $row->menu->namaMenu }}</td>
                    <td>{{ $row->waktuPesan }}</td>
                    <td>{{ $row->TotalPesan }}</td>
                    <td>{{ rupiah($harga) }}</td>
                    <td>{{ $row->users->name }}</td>
                    <td>{{ $row->meja->kodeMeja}}</td>
                    <td style="text-align: center;">
						<span class="badge text-white {{ ($row->statusPesanan == 'Pesanan Siap Di Hidangkan') ? 'bg-success' : 'bg-secondary'}}"
							style="padding: 10px; font-size: 12px;">
							{{ ($row->statusPesanan  == 'Pesanan Siap Di Hidangkan') ? 'Pesanan Siap Di Hidangkan' : 'Pesanan Sedang Di Proses'}}
						</span>
					</td>
                    <td width="15%">
                        <form method="POST" id="formDelete">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-dark btn-sm" title="Detail Pesanan"
                                href=" {{ route('pesanan.show',$row->id) }}">
                                <i class="fa fa-eye"></i>
                            </a>
                            &nbsp;
                            <a class="btn btn-warning btn-sm" title="Ubah Pesanan"
                                href=" {{ route('pesanan.edit',$row->id) }}">
                                <i class="fa fa-pencil"></i>
                            </a>
                            &nbsp;
                            <button type="submit" class="btn btn-danger btn-sm btnDelete" title="Hapus Pesanan"
                                data-action="{{ route('pesanan.destroy',$row->id) }}">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script type="text/javascript">
    $('body').on('click', '.btnDelete', function(e) {
    e.preventDefault();
    var action = $(this).data('action');
    Swal.fire({
        title: 'Apakah Anda yakin ingin menghapus data ini?',
        text: "Data yang sudah dihapus tidak bisa dikembalikan lagi",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        cancelButtonText: 'Batal',
        confirmButtonText: 'Yakin'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#formDelete').attr('action', action);
            $('#formDelete').submit();
        }
    })
})
</script>
@endsection