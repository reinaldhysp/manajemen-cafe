@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Panduan Kasir</h1>
          </div>
          <div class="section-body">
            <h6>1. Masuk ke Halaman Data Pekerja </h6>
            <img src="../assets/img/data_pekerja.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>2. Tekan tombol Tambah Pekerja (Untuk menambah pekerja) </h6>
            <img src="../assets/img/cek2.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>3. Masukkan nama, email, posisi dan kata sandi Pengguna</h6>
            <img src="../assets/img/tambah_pekerja.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>4. Pengguna berhasil ditambahkan</h6>
            <img src="../assets/img/sukses.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>5. Jika pekerja ingin dihapus, klik tombol merah disamping tabel</h6>
            <img src="../assets/img/delete.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
          </div>
          <br>
      <div class="col-md-12 text-right">
        <a class="btn btn-primary" href="/casir/panduan" role="button">Kembali</a>
      </div>
        </section>
      </div>
@endsection

