@extends('layout.template')
@section('content')
<!-- Main Content -->
<div class="main-content">
  <section class="section">
      <div class="section-header">
          <h1>Panduan Waiter</h1>
      </div>
      <div class="section-body">
            <h6>1. Masuk kehalaman status pemesanan</h6>
            <img src="../assets/img/status.png" alt="jelovaCafe" width="800px" height="430px">
            <br><br><br><br>
            <h6>2. Jika status masih bertuliskan "cook", maka pesanan sedang dimasak</h6>
            <img src="../assets/img/cook.png" alt="jelovaCafe" width="700px" height="50px">
            <br><br><br><br>
            <h6>3. Jika status sudah bertuliskan "served", maka pesanan sudah selesai dimasak</h6>
            <img src="../assets/img/served.png" alt="jelovaCafe" width="700px" height="50px">
      </div>
      <br>
      <div class="col-md-12 text-right">
        <a class="btn btn-primary" href="/waiters/panduan" role="button">Kembali</a>
      </div>
  </section>
</div>
@endsection


