@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Cetak Pesanan</h3>
        </div>
        <div class="section-body">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <div class="card card-primary">
            <div class="card-body">
                <div class="form-group">
                    <label for="no_meja">Nomor Meja</label>
                    <input id="no_meja" type="text" class="form-control " name="no_meja" value="{{ old('no_meja') }}"  autofocus>
                  </div>
                  <div class="form-group">
                    <a href="" onclick ="this.href='/casir/cetakpesanan/' + document.getElementById('no_meja').value" target="_blank" class="btn btn-primary col-md-12">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
                      <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
                      <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
                    </svg>  &nbsp <p class="d-inline">Cetak struk</p>
                    </a>
                  </div>
            </div>
            </div>
            </div>
          </div>
        </div>
    </section>
</div>


@endsection