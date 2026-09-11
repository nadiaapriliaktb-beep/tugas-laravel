<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM INVENTARIS BARANG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <p>DAFTAR BARANG</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">kode_barang</th>
      <th scope="col">nama_barang</th>
      <th scope="col">kategori</th>
      <th scope="col">jumlah</th>
      <th scope="col">kondisi</th>
      <th scope="col">lokasi_penyimpanan</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <td>{{$user->kode_barang}}</td>
      <td>{{$user->nama_barang}}</td>
      <td>{{$user->kategori}}</td>
      <td>{{$user->jumlah}}</td>
      <td>{{$user->kondisi}}</td>
      <td>{{$user->lokasi_penyimpanan}}</td>
      <td>
        <a class="btn btn-primary" href="/barang/edit/{{ $user->kode_barang }}" role="button">Edit</a>
        <a class="btn btn-primary" href="/barang/delete/{{ $user->kode_barang }}" >Hapus</a>
      </td>
    </tr> 
    @endforeach
   
  </tbody>
</table>
<div class="container">
  <a class="btn btn-primary" href="/tambah" role="button"> Tambah Data</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>