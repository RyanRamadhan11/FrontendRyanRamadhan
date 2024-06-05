@extends('Admin.home')
@section('content')
<section class="section">
    <h2 style="margin: 10px 0px 10px 10px; ">Dashboard</h2>
        <nav>
            <ol class="breadcrumb mb-4 " style="margin-left: 10px;">
                <li class="breadcrumb-item"><a style="text-decoration: none; color: black;" href="{{ url('pesanan') }}">Pesanan</a></li>
                <li class="breadcrumb-item active">Form Input Pesanan</li>
            </ol>
        </nav>
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="mt-4" style="width:550px; margin-left:18px;">
                    <a class="btn btn-warning btn-sm fw-bold" title="Kembali" 
                        href=" {{ url('pesanan') }}">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center mb-5">Form Input Pesanan</h5>

                    <!-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> Terjadi Kesalahan saat input data<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif -->
                    <form class="row g-3" method="POST" action="{{ route('pesanan.store')}}">
                        @csrf
                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Kode Pesanan</label>
                            <input type="text" class="form-control @error('kodePesanan') is-invalid @enderror" 
                                name="kodePesanan" placeholder="Kode Pesanan" value="{{ old('kodePesanan') }}">
                            @error('kodePesanan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Nama Menu</label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('menu_id') 
                                        is-invalid @enderror" name="menu_id">
                                    <option value="">-- Pilih Menu --</option>
                                    @foreach($ar_menu as $menu)
                                        @if ($menu->status != 'Sold Out')
                                        @php $sel = ( old('menu_id') == $menu->id) ? 'selected' : ''; @endphp
                                        <option value="{{ $menu->id }}" {{ $sel }}> {{ $menu->namaMenu }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('menu_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Waktu Pesan</label>
                            <input type="datetime-local" class="form-control @error('waktuPesan') is-invalid @enderror"
                                name="waktuPesan" placeholder="Waktu Pesan" value="{{ old('waktuPesan') }}">
                            @error('waktuPesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Total Pesan</label>
                            <input type="number" class="form-control @error('TotalPesan') is-invalid @enderror"
                                name="TotalPesan" placeholder="Total Pesan" value="{{ old('TotalPesan') }}">
                            @error('TotalPesan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="col-6">
                            <label class="form-label">Nama User</label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('users_id') 
                                        is-invalid @enderror" name="users_id">
                                    <option value="">-- Pilih User --</option>
                                    @foreach($ar_users as $user)
                                    @php $sel = ( old('user_id') == $user->id) ? 'selected' : ''; @endphp
                                    <option value="{{ $user->id }}" {{ $sel }}> {{ $user->name }}</option>
                                    @endforeach
                                </select>
                                @error('users_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label">Kode Meja</label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('meja_id') 
                                        is-invalid @enderror" name="meja_id">
                                    <option value="">-- Pilih Kode Meja --</option>
                                    @foreach($ar_meja as $meja)
                                    @php $sel = ( old('meja_id') == $meja->id) ? 'selected' : ''; @endphp
                                    <option value="{{ $meja->id }}" {{ $sel }}>{{ $meja->kodeMeja }}</option>
                                    @endforeach
                                </select>
                                @error('meja_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-6">
                            <label class="form-label">Status Pesanan</label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('statusPesanan') is-invalid @enderror" 
                                    name="statusPesanan">
                                        <option value="">-- Pilih Status --</option>
                                        @foreach($ar_status as $sts)
                                        @php $sel = ( old('statusPesanan') == $sts) ? 'selected' : ''; @endphp
                                        <option value="{{ $sts }}" {{ $sel }}>{{ $sts }}</option>
                                        @endforeach
                                </select>
                                @error('statusPesanan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="text-center mt-5 mb-5" style="border-radius: 130px;">
                            <button type="submit" class="btn btn-success" style="margin-right: 10px;">Simpan</button>
                            <button type="reset" class="btn btn-dark" style="margin-right: 10px;">Batal</button>
                        </div>
                        
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>
</section>

@endsection