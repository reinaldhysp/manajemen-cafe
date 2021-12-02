@extends('layout.template')

@section('content')
<!-- Main Content -->
<form action="{{url('pesan')}}" method="POST">   
  @method('patch')
  @csrf
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pemesanan</h1>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-sm-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="makanan-tab" data-toggle="tab" href="#makanan" role="tab" aria-controls="makanan" aria-selected="true">Makanan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="minuman-tab" data-toggle="tab" href="#minuman" role="tab" aria-controls="minuman" aria-selected="false">Minuman</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="makanan" role="tabpanel" aria-labelledby="makanan-tab">
                        @livewire('makanan')
                      </div>
                    <div class="tab-pane fade" id="minuman" role="tabpanel" aria-labelledby="minuman-tab">
                      @livewire('minuman')
                    </div>
                   </div>
                   <div class="padi text-right">
                    <button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#exampleModal">Pesan</button>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>    
        </section>
      </div>

{{-- Modal --}}
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Konfirmasi Pesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Pesanan Anda sudah sesuai ?</p>
      </div>
      <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Belum</button>
        <button type="submit" class="btn btn-primary">Ya</button>
      </div>
    </div>
  </div>
</div>
</form>

@endsection

