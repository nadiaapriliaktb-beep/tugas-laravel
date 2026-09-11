<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>ini tambah</p>
    <div class="mb-3">
        <form action="/barang/store" method="POST" class="row g-3">
            @csrf
            <div class="col-md-12">
                <label for="kode_barang" class="form-label">Kode_barang</label>
                <input type="text" class="form-control" id="kode_barang" name="kode_barang">
            </div>
            <div class="col-md-12">
                <label for="nama_barang" class="form-label">Nama_barang</label>
                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
            </div>
            <div class="col-md-12">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori">
            </div>
            <div class="col-md-12">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
            <div class="col-md-12">
                <label for="kondisi" class="form-label">Kondisi</label>
                <input type="text" class="form-control" id="kondisi" name="kondisi">
            </div>
            <div class="col-md-12">
                <label for="lokasi_penyimpanan" class="form-label">Lokasi_penyimpanan</label>
                <input type="text" class="form-control" id="lokasi_penyimpanan" name="lokasi_penyimpanan">
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
                crossorigin="anonymous"></script>

            <button class="btn btn-primary" type="submit">Button</button>

        </form>

</body>

</body>

</html>