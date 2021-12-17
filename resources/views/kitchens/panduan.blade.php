@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Panduan Kitchen</h1>
          </div>
          <div class="section-body">
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara mengupdate status pesanan</h5>
                  <p class="card-text">Kitchen dapat mengupdate status pesanan dari "cook" menjadi "served". Bagaimana caranya?</p>
                  <a href="/panduan/statuss" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara Menambah dan Menghapus Menu Makanan dan Minuman</h5>
                  <p class="card-text">Kitchen dapat menambah dan menghapus menu makanan dan juga menu minuman di cafe. Bagaimana Caranya?</p>
                  <a href="/panduan/menu" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
            <div class="card text-center">
                <div class="card-body">
                  <h5 class="card-title">Cara Mengedit Profil</h5>
                  <p class="card-text">Kitchen dapat mengedit data profil dari akun yang dimiliki. Bagaimana cara nya?</p>
                  <a href="/panduan/profils" class="btn btn-primary">Pelajari</a>
                </div>
                <div class="card-footer text-muted">
                  Jelova Cafe & Resto
                </div>
            </div>
          </div>
        </section>
      </div>
@endsection

