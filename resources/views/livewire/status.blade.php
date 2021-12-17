<div>
    <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Status Pemesanan</h1>
          </div>
          <div class="section-body">
            <div class="bers">
            <a class="btn btn btn-primary text-white" href="/pemesanan/tambah">Tambah Pesanan</a>
            </div>
            @if ($pesananMakanan->count() || $pesananMinuman->count())
            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="ber">
                  <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">Nomor Meja</th>
                          <th scope="col">Pesanan Makanan</th>
                          <th scope="col">Porsi Makanan</th>
                          <th scope="col">Service</th>
                          <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pesananMakanan as $food)
                          <tr>
                            <td>{{$food->tables['meja']}}</td>
                            <td>{{$food->food['food_name']}}</td>
                            <td>{{$food->porsi_makanan}}</td>
                            <td>{{$food->services['servis']}}</td>
                            <td>
                              @if ($food->status=="cook")
                                <span class="badge badge-warning">{{$food->status}}</span>
                              @else
                              <span class="badge badge-success">{{$food->status}}</span>
                              @endif
                            </td>
                          </tr>
                    @endforeach
                      </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="ber">
                  <table class="table table-hover text-center">
                    <thead class="thead-dark">
                        <tr>
                          <th scope="col">Nomor Meja</th>
                          <th scope="col">Pesanan Minuman</th>
                          <th scope="col">Porsi Minuman</th>
                          <th scope="col">Service</th>
                          <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($pesananMinuman as $drink)
                          <tr>
                            <td>{{$drink->tables['meja']}}</td>
                            <td>{{$drink->drinks['drink_name']}}</td>
                            <td>{{$drink->porsi_minuman}}</td>
                            <td>{{$drink->services['servis']}}</td>
                            <td>
                              @if ($drink->status=="cook")
                              <span class="badge badge-warning">{{$drink->status}}</span>
                              @else
                              <span class="badge badge-success">{{$drink->status}}</span>
                              @endif
                            </td>
                          </tr>
                    @endforeach
                      </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
         
          @else
          <div class="col-12 col-sm-12 col-lg-12">
            <div class="card text-center">
              <div class="card-body">
                <div class="med">
                  <img src="https://assets-global.cpcdn.com/assets/empty_states/no_recipes-17207357d165f4f1da68619d8033eed4abec11385b76e2d53efe02fd06384737.svg" />
                      <h5 class="card-title"><br>Belum Ada Pesanan</h5>
                      <div class="meds">
                        <a class="btn btn-primary" href="/pemesanan/tambah" role="button">Buat Pesanan</a>
                    </div>
                </div>
              </div>
            </div>
          </div>

          @endif    
        </section>
    </div>
</div>
