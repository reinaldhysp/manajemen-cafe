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
                    <a href="" onclick ="this.href='/casir/cetakpesanan/' + document.getElementById('no_meja').value" target="_blank" class="btn btn-primary col-md-12">Cetak Struk</a>
                  </div>
            </div>
            </div>
            </div>
          </div>
        </div>
    </section>
</div>


@endsection