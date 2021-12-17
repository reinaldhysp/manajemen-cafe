@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Panduan Waiter</h1>
          </div>
          <div class="section-body">
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara Melakukan Pemesanan</h5>
                  <p class="card-text">Waiter dapat melakukan pemesanan makanan dan minuman yang dipesan oleh pelanggan. Bagaimana caranya?</p>
                  <a href="/panduan/pesanan" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Halaman Status Pemesanan</h5>
                  <p class="card-text">Waiter dapat mengetahui status pemesanan dari pesanan pelanggan. Bagaimana caranya?</p>
                  <a href="/panduan/status" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara Mengedit Profil</h5>
                  <p class="card-text">Waiter dapat mengedit data profil dari akun ynag dimiliki. Bagaimana cara nya?</p>
                  <a href="/panduan/profil" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
          </div>
        </section>
      </div>
@endsection

