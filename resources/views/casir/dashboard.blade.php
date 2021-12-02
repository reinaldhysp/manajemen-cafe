@extends('layout.template')

@section('content')
<!-- Main Content -->

<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Halaman Pesanan Pelanggan</h1>
          </div>
          <div class="section-body">
          <div class="skrtt">
          <a href="{{ route('cetakform') }}" class="btn btn-primary" target="blank"><h6>Cetak Struk</h6></a>
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
                <th scope="col">Aksi</th>
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
                  <td>
                  <form action="{{ url('food/'. $food->id )}}" method="post" class="d-inline" onsubmit="return confirm('Apakah Data Pekerja akan dihapus?')">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                  </form>
                </td>
                </tr>
                @endforeach
                @foreach($drinkorder as $drink)
                <tr>
                  <td>{{$drink->tables['meja']}}</td>
                  <td>{{$drink->drinks['drink_name']}}</td>
                  <td>{{$drink->porsi_minuman}}</td>
                  <td>Rp {{$drink->drinks['price']}}</td>
                  <td>Rp {{$drink->porsi_minuman * $drink->drinks['price']}}.00</td>
                  <td>
                  <form action="{{ url('drink/'. $drink->id )}}" method="post" class="d-inline" onsubmit="return confirm('Apakah pesanan akan dihapus?')">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                  </form>
                </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>
        </section>
      </div>



@endsection