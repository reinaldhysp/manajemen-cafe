@extends('layout.template')
@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
      <div class="section-header">
          <h1>Panduan Kasir</h1>
      </div>
      <div class="section-body">
            <h6>1. Masuk kehalaman pemesanan. Pilih bagian "makanan" untuk memesan makanan</h6>
            <img src="../assets/img/pesanan.png" alt="jelovaCafe" width="800px" height="350px">
            <br><br><br><br>
            <h6>2. Pilih bagian "minuman" untuk memesan minuman</h6>
            <img src="../assets/img/minum.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>3. Konfirmasi pesanan setelah menekan tombol "Pesan"</h6>
            <img src="../assets/img/konfir.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>4. Pesanan berhasil ditambahkan</h6>
            <img src="../assets/img/success.png" alt="jelovacafe" width="800px" height="320px"> 
      </div>
      <br>
      <div class="col-md-12 text-right">
        <a class="btn btn-primary" href="/waiters/panduan" role="button">Kembali</a>
      </div>
  </section>
</div>
@endsection


