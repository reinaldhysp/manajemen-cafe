@extends('layout.template')

@section('content')
<!-- Main Content -->

<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Halaman Pesanan</h1>
          </div>
          <div class="section-body">
    <table class="table text-center">
          <thead class="thead-dark">
              <tr>
                <th scope="col">Nomor Meja</th>
                <th scope="col">Pesanan Makanan</th>
                <th scope="col">Porsi Makanan</th>
                <th scope="col">Service</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody>
          @foreach($foodorder as $food)
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
                  <td>
                  <form action="{{ url('pesan/'. $food->id . '/food' )}}" method="post" class="d-inline" >
                      @method('patch')
                      @csrf
                      <button type="submit" class="btn btn-primary">Update</button>
                  </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
    </table>
    <table class="table text-center">
          <thead class="thead-dark">
              <tr>
                <th scope="col">Nomor Meja</th>
                <th scope="col">Pesanan Minuman</th>
                <th scope="col">Porsi Minuman</th>
                <th scope="col">Service</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody>
          @foreach($drinkorder as $drink)
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
                  <td>
                  <form action="{{ url('pesan/'. $drink->id . '/drink')}}" method="post" class="d-inline" >
                      @method('patch')
                      @csrf
                      <button type="submit" class="btn btn-primary">Update</button>
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