<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
        <title>Komoditi</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    CRUD Data Komoditi</a>
                </div>
                <div class="card-body">
                    <a href="/komoditi/tambah" class="btn btn-primary">Input Komoditi Baru</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Deskripsi</th>
                                <th>File</th>
                                <th>Gram</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($komoditi as $p)
                            <tr>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->kategori }}</td>
                                <td>{{ $p->stok }}</td>
                                <td>{{ $p->harga }}</td>
                                <td>{{ $p->deskripsi }}</td>
                                <td>{{ $p->file }}</td>
                                <td>{{ $p->gram }}</td>
                                <td>
                                    <a href="/komoditi/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/komoditi/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>