<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
</head>
<body>
    <h1>Data Pesanan</h1>
    <table cellpadding="5" border="1">
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
                </tr>
            </thead>
            <tbody>
                @php $no= 1; @endphp
                @foreach($pesanan as $row)
                <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $row->kodePesanan }}</td>
                    <td>{{ $row->menu->namaMenu }}</td>
                    <td>{{ $row->waktuPesan }}</td>
                    <td>{{ $row->TotalPesan }}</td>
                    <td>{{ $row->TotalHarga }}</td>
                    <td>{{ $row->users->name }}</td>
                    <td>{{ $row->meja->kodeMeja }}</td>
                    <td>{{ $row->statusPesanan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>