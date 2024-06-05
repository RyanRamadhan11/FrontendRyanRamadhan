@extends('Admin.home')
@section('content')
<section class="section">
    <h2 style="margin: 10px 0px 10px 10px; ">Dashboard</h2>
        <nav>
            <ol class="breadcrumb mb-4 " style="margin-left: 10px;">
                <li class="breadcrumb-item"><a style="text-decoration: none; color: black;" href="{{ url('postsMenu') }}">Menu</a></li>
                <li class="breadcrumb-item active">Form Input Posts Menu</li>
            </ol>
        </nav>
    <div class="row">
        <div class="col-lg-12">
            
            <div class="card">
                <div class="mt-4" style="width:550px; margin-left:18px;">
                    <a class="btn btn-warning btn-sm fw-bold" title="Kembali" 
                        href=" {{ url('postsMenu') }}">
                        <i class="fa fa-arrow-circle-left"></i> Back
                    </a>
                </div>

                <div class="card-body">
                    <h5 class="card-title text-center mb-5">Form Input Posts Menu</h5>

                    <form class="row g-3" method="POST" action="{{ route('postsMenu.store')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Nama Menu</label>
                            <input type="text" class="form-control @error('namaMenu') is-invalid @enderror" 
                            name="namaMenu" placeholder="Nama Menu" value="{{ old('namaMenu') }}">
                            @error('namaMenu')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label class="form-label">Status</label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('status') is-invalid @enderror" 
                                    name="status">
                                        <option value="">-- Pilih Status --</option>
                                        @foreach($ar_status as $sts)
                                        @php $sel = ( old('status') == $sts) ? 'selected' : ''; @endphp
                                        <option value="{{ $sts }}" {{ $sel }}>{{ $sts }}</option>
                                        @endforeach
                                </select>
                                @error('status')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Harga</label>
                            <input type="number" class="form-control @error('harga') is-invalid @enderror" 
                                name="harga" placeholder="Harga" value="{{ old('harga') }}">
                            @error('harga')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Stok</label>
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" 
                                name="stok" placeholder="Stok" value="{{ old('stok') }}">
                            @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="inputNane4" class="form-label">Foto</label>
                            <input class="form-control" type="file" name="foto" placeholder="foto">
                        </div>
                        <div class="col-6">
                            <label class="form-label">Kategori</label>
                            <div class="col-sm-12">
                                <select class="form-select form-control @error('kategori_id') is-invalid @enderror" 
                                name="kategori_id">
                                    <option value="">-- Pilih Kategori --</option>
                                    @foreach($ar_kategori as $ktg)
                                    @php $sel = ( old('kategori_id') == $ktg->id) ? 'selected' : ''; @endphp
                                    <option value="{{ $ktg->id }}" {{ $sel }}>{{ $ktg->namaKategori }}</option>
                                    @endforeach
                                </select>
                                @error('kategori_id')
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