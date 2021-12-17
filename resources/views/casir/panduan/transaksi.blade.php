@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Panduan Kasir</h1>
          </div>
          <div class="section-body">
            <h6>1. Masuk ke Halaman Data Pesanan </h6>
            <img src="../assets/img/data_pesanan.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>2. Tekan tombol Cetak Struk </h6>
            <img src="../assets/img/cek.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>3. Masukkan Nomor Meja Pelanggan, lalu tekan "Cetak Struk"</h6>
            <img src="../assets/img/cetak_struk.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>4. Struk Pembayaran Berhasil dibuat</h6>
            <img src="../assets/img/transaksi3.png" alt="jelovaCafe" width="300px" height="300px">
            <br><br><br><br>
          </div>
          <br>
      <div class="col-md-12 text-right">
        <a class="btn btn-primary" href="/casir/panduan" role="button">Kembali</a>
      </div>
        </section>
      </div>
@endsection

