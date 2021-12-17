@extends('layout.template')
@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
      <div class="section-header">
          <h1>Panduan Kasir</h1>
      </div>
      <div class="section-body">
            <h6>1. Tekan bagian foto profil disudut kanan navbar, kemudian klik "profil"</h6>
            <img src="../assets/img/profil.png" alt="jelovaCafe" width="800px" height="150px">
            <br><br><br><br>
            <h6>2. Tekan "Choose File" jika ingin mengupload foto profil akun. Selanjutnya klik "Unggah Foto"</h6>
            <img src="../assets/img/profilcek.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>3. Tekan "Edit profil" apabila ingin mengedit profil</h6>
            <img src="../assets/img/profilcek2.png" alt="jelovaCafe" width="800px" height="320px">
            <br><br><br><br>
            <h6>4. Di Halaman Edit profil, silahkan masukkan data yang ingin diubah.Kemudian klik tombol "Edit"</h6>
            <img src="../assets/img/edit_profil_waiter.png" alt="jelovacafe" width="800px" height="320px"> 
      </div>
      <br>
      <div class="col-md-12 text-right">
        <a class="btn btn-primary" href="/casir/panduan" role="button">Kembali</a>
      </div>
  </section>
</div>
@endsection


