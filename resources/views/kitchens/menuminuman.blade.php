@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Halaman Menu Minuman</h1>
          </div>
          <div class="section-body">
          <div class="skrtt">
          <a href="{{url('/kitchen/adddrink')}}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
              <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            </a> &nbsp <h6 class="d-inline">Tambah Menu Minuman</h6> 
            <br><br>
          </div>
    <table class="table">
          <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Menu Minuman</th>
                <th scope="col">Harga</th>
                <th scope="col">Aksi</th>
              </tr>
          </thead>
          <tbody>
          @php $no = 1; @endphp
            @foreach($drinks as $drink)
            <tr>
                <th scope="row">{{$no++}}</th>
                <td>{{$drink->drink_name}}</td>
                <td>Rp {{$drink->price}}</td>
                <td>
                  <form action="{{ url('drink/'. $drink->id )}}" method="post" class="d-inline" onsubmit="return confirm('Apakah Menu Minuman akan dihapus?')">
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