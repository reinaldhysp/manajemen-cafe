@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Halaman Menu Makanan</h1>
          </div>
          <div class="section-body">
          <div class="skrtt">
          <a href="{{url('/kitchen/addfood')}}" class="btn btn-primary">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0z"/>
          </svg> &nbsp <p class="d-inline">Tambah Menu Makanan</p>
            </a>  
            <br><br>
          </div>
    <table class="table">
          <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Menu Makanan</th>
                <th scope="col">Harga</th>
                <th scope="col" class="text-center">Aksi</th>
              </tr>
          </thead>
          <tbody>
          @php $no = 1; @endphp
            @foreach($foods as $food)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$food->food_name}}</td>
                <td>Rp {{$food->price}}</td>
                <td class="text-center">
                  <a href="{{ url('foods/'. $food->id )}}" class="btn btn-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                  </a>
                  <form action="{{ url('food/'. $food->id )}}" method="post" class="d-inline" onsubmit="return confirm('Apakah Menu Makanan akan dihapus?')">
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