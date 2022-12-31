@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Halaman Riwayat Pesanan</h1>
          </div>
          <div class="section-body">
          <div class="skrtt">
          <a href="{{ route('riwayat') }}" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
            <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
            <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
          </svg>&nbsp <p class="d-inline">Hapus semua</p> 
          </a>
            <br><br>
          </div>
    <table class="table">
          <thead class="thead-dark">
              <tr>
                <th scope="col">Nomor Meja</th>
                <th scope="col">Pesanan</th>
                <th scope="col">Porsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Total Harga</th>
                <th scope="col">Tanggal</th>
                
              </tr>
          </thead>
          <tbody>
              @foreach($foodorder as $food)
                <tr>
                  <td>{{$food->tables['meja']}}</td>
                  <td>{{$food->food['food_name']}}</td>
                  <td>{{$food->porsi_makanan}}</td>
                  <td>Rp {{$food->food['price']}}</td>
                  <td>Rp {{$food->porsi_makanan * $food->food['price']}}.00</td>
                  <td>{{$food->created_at}}</td>
                  
                </tr>
                @endforeach
                @foreach($drinkorder as $drink)
                <tr>
                  <td>{{$drink->tables['meja']}}</td>
                  <td>{{$drink->drinks['drink_name']}}</td>
                  <td>{{$drink->porsi_minuman}}</td>
                  <td>Rp {{$drink->drinks['price']}}</td>
                  <td>Rp {{$drink->porsi_minuman * $drink->drinks['price']}}.00</td>
                  <td>{{$drink->created_at}}</td>
                </tr>
                @endforeach
          </tbody>
    </table>
</div>
        </section>
      </div>

      



@endsection