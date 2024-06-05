
@if(Auth::user()->role != 'Customer')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Administrator Frontend Ryan</title>

        <link href="{{ url('assets2/img/tea.png') }}" rel="icon">

        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
        <link href="{{ url('assets2/css/styles.css') }}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
    @include('sweetalert::alert')
        @include('Admin.navbar')
        <div id="layoutSidenav">
            @include('Admin.sidenav')
            @if(Auth::user()->role != 'Customer')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <marquee class="mt-4 p-3 fw-bold" style="background-color: gainsboro;">Selamat Datang di Warung Makan Joo</marquee>
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Warung Makan Joo</li>
                        </ol>
						<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color: blue;">
                                    <div class="card-body">Data Users</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-sm" href="{{ url('/kelola_user') }}">View Details</a>
                                        <div class="small text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Data Posts Menu</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-sm" href="{{ url('/postsMenu') }}">View Details</a>
                                        <div class="small text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Data Meja</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/meja') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color: chocolate;">
                                    <div class="card-body">Data Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/kategori') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color: brown;">
                                    <div class="card-body">Data Pesanan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/pesanan') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4"  style="background-color: darkslateblue;">
                                    <div class="card-body">Data Metode Pembayaran</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/metodepembayaran') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color: darkmagenta;">
                                    <div class="card-body">Data Pembayaran</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-sm" href="{{ url('/pembayaran') }}">View Details</a>
                                        <div class="small text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4"  style="background-color: darkslateblue;">
                                    <div class="card-body">Lihat Testimoni</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/testimoni') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                <h5 class="card-title">Grafik Users</h5>

                                <!-- Pie Chart -->
                                <canvas id="pieChart" style="max-height: 400px;"></canvas>
                                <script>
                                    var lbl2 = [@foreach($ar_role as $role) '{{ $role->role }}', @endforeach];
                                    var jml = [@foreach($ar_role  as $role) {{ $role->jumlah }}, @endforeach];
                                    document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#pieChart'), {
                                        type: 'pie',
                                        data: {
                                        labels: lbl2,
                                        datasets: [{
                                            label: 'My First Dataset',
                                            data: jml,
                                            backgroundColor: [
                                            'rgb(100, 149, 237)',
                                            'rgb(119, 136, 153)',
                                            'rgb(205, 133, 63)'
                                            ],
                                            hoverOffset: 4
                                        }]
                                        }
                                    });
                                    });
                                </script>
                                <!-- End Pie CHart -->

                                </div>
                            </div>
                        </div>
                            <div class="col-xl-6 mt-2">
                            <h5 class="card-title">Grafik Stok Menu</h5>
                            <canvas id="barChart" style="max-height: 400px; "></canvas>
                                <script>
                                    //ambil data nama pegawai dan kekayaan dari DashboardController di fungsi index
                                    var lbl = [@foreach($ar_menu as $menu) '{{ $menu->namaMenu }}', @endforeach];
                                    var hrt = [@foreach($ar_menu as $menu) {{ $menu->stok }}, @endforeach];
                                    document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#barChart'), {
                                        type: 'bar',
                                        data: {
                                        //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                        labels: lbl,
                                        datasets: [{
                                            label: 'Stok Menu',
                                            //data: [65, 59, 80, 81, 56, 55, 40],
                                            data: hrt,
                                            backgroundColor: [

                                            'rgba(255, 259, 164, 0.4)',
                                            'rgba(255, 205, 186, 0.4)',
                                            'rgba(75, 292, 192, 0.4)',
                                            'rgba(54, 162, 235, 0.4)',
                                            'rgba(153, 102, 255, 0.4)',
                                            'rgba(201, 203, 207, 0.4)'
                                            ],
                                            borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 159, 64)',
                                            'rgb(255, 205, 86)',
                                            'rgb(75, 192, 192)',
                                            'rgb(54, 162, 235)',
                                            'rgb(153, 102, 255)',
                                            'rgb(201, 203, 207)'
                                            ],
                                            borderWidth: 1
                                        }]
                                        },
                                        options: {
                                        scales: {
                                            y: {
                                            beginAtZero: true
                                            }
                                        }
                                        }
                                    });
                                    });
                                </script>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Pesanan
                            </div>
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
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @yield('content')
                    </div>
                </main>
                @include('Admin.footer')
            </div>
            @else
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <marquee class="mt-4 p-3 fw-bold" style=" font-size: medium; background-color: gainsboro;">Selamat Datang di DigiCoffee </marquee>
                        <div class="section-title">
                            <h2 class="text-center" style="color: brown; margin-top: 30px;">DigiCoffee</h1>
                        </div>
                        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
                            <div class="col-lg-6 mb-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-5">
                                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                                    </div>
                                    <div class="col-sm-7">
                                        <!-- <h4><i class="fa fa-truck service-icon"></i>Alat CodeCoffee/></h4> -->
                                        <h5>Alat Coffee</h5>
                                        <p class="m-0" style="font-size: 14px;">Kualitas alat yang maksimal merupakan hal terpenting untuk penyajian minuman dan makanan bagi pelanggan setia <b>DigiCoffee</b>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-5">
                                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-5.jpg" alt="">
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>Makanan</h5>
                                        <p class="m-0" style="font-size: 14px;">Menu makanan yang lezat untuk menemani pelanggan setia <b>DigiCoffee</b> dalam mengutarakan ide-ide yang di utarakan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-5">
                                        <img class="img-fluid mb-3 mb-sm-0" src="img/service-6.jpg" alt="">
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>Tempat Coffe</h5>
                                        <p class="m-0" style="font-size: 14px;">Tempat yang nyaman dan asri merupakan salah kunci pemikat pelanggan setia <b>DigiCoffee</b>.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-5">
                                <div class="row align-items-center">
                                    <div class="col-sm-5">
                                        <img class="img-fluid mb-3 mb-sm-0" src="img/menu-3.jpg" alt="">
                                    </div>
                                    <div class="col-sm-7">
                                        <h5>Minuman</h5>
                                        <p class="m-0" style="font-size: 14px;">Penyatu dan terbukanya ide-ide adalah minuman pelanggan setia <b>DigiCoffee</b>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
						<div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-secondary text-white mb-4">
                                    <div class="card-body">Lihat Posts Menu</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-sm" href="{{ url('postsMenu') }}">View Details</a>
                                        <div class="small text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Lihat Meja</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/meja') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4" style="background-color: chocolate;">
                                    <div class="card-body">Lihat Kategori</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/kategori') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card text-white mb-4"  style="background-color: darkslateblue;">
                                    <div class="card-body">Lihat Comment</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white btn btn-smsmall text-white btn btn-sm" href="{{ url('/testimoni') }}">View Details</a>
                                        <div class="small text-white btn btn-smsmall text-white btn btn-sm"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="justify-content: center; margin-bottom: 50px; margin-top: 40px;">
                            <div class="col-xl-6 mt-2">
                            <h5 class="card-title text-center mb-3" >Daftar Stok Menu</h5>
                            <canvas id="barChart" style="max-height: 400px; "></canvas>
                                <script>
                                    //ambil data nama pegawai dan kekayaan dari DashboardController di fungsi index
                                    var lbl = [@foreach($ar_menu as $menu) '{{ $menu->namaMenu }}', @endforeach];
                                    var hrt = [@foreach($ar_menu as $menu) {{ $menu->stok }}, @endforeach];
                                    document.addEventListener("DOMContentLoaded", () => {
                                    new Chart(document.querySelector('#barChart'), {
                                        type: 'bar',
                                        data: {
                                        //labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                                        labels: lbl,
                                        datasets: [{
                                            label: 'Stok Menu',
                                            //data: [65, 59, 80, 81, 56, 55, 40],
                                            data: hrt,
                                            backgroundColor: [

                                            'rgba(255, 259, 164, 0.4)',
                                            'rgba(255, 205, 186, 0.4)',
                                            'rgba(75, 292, 192, 0.4)',
                                            'rgba(54, 162, 235, 0.4)',
                                            'rgba(153, 102, 255, 0.4)',
                                            'rgba(201, 203, 207, 0.4)'
                                            ],
                                            borderColor: [
                                            'rgb(255, 99, 132)',
                                            'rgb(255, 159, 64)',
                                            'rgb(255, 205, 86)',
                                            'rgb(75, 192, 192)',
                                            'rgb(54, 162, 235)',
                                            'rgb(153, 102, 255)',
                                            'rgb(201, 203, 207)'
                                            ],
                                            borderWidth: 1
                                        }]
                                        },
                                        options: {
                                        scales: {
                                            y: {
                                            beginAtZero: true
                                            }
                                        }
                                        }
                                    });
                                    });
                                </script>
                            </div>
                        </div>

                        @include('Admin.footer')
            @endif
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('assets2/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ url('assets2/demo/chart-area-demo.js') }}"></script>
        <script src="{{ url('assets2
            /demo/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ url('assets2/js/datatables-simple-demo.js') }}"></script>
    </body>
</html>
@else
    @include('master')
@endif
