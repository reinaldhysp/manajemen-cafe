@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Panduan Kasir</h1>
          </div>
          <div class="section-body">
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara Melakukan Transaksi Pembayaran</h5>
                  <p class="card-text">Kasir dapat melakukan transaksi pembayaran dengan pelanggan hanya dengan menginput nomor meja pelanggan. Bagaimana Cara nya?</p>
                  <a href="/panduan/transaksi" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara Menambah dan Menghapus Data Pekerja</h5>
                  <p class="card-text">Kasir dapat menambah dan menghapus data anggota pekerja di cafe. Bagaimana cara nya?</p>
                  <a href="/panduan/pekerja" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara Mengedit Profil</h5>
                  <p class="card-text">Kasir dapat mengedit data profil dari akun ynag dimiliki. Bagaimana cara</p>
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

