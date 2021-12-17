@extends('layout.template')
@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
      <div class="section-header">
          <h1>Panduan Kasir</h1>
      </div>
      <div class="section-body">
            <h6>1. Masuk ke halaman data pesanan</h6>
            <img src="../assets/img/kitchen.png" alt="jelovaCafe" width="800px" height="380px">
            <br><br><br><br>
            <h6>2. Tekan tombol "Update" untuk mengubah status "cook" menjadi "served"</h6>
            <img src="../assets/img/kitchenup.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>3. Status berhasil diubah</h6>
            <img src="../assets/img/yes.png" alt="jelovaCafe" width="800px" height="320px">
            
      </div>
      <br>
      <div class="col-md-12 text-right">
        <a class="btn btn-primary" href="/kitchen/panduan" role="button">Kembali</a>
      </div>
  </section>
</div>
@endsection


