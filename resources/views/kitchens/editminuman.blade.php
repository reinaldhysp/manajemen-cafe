@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Tambah Menu Minuman</h3>
        </div>
        <div class="section-body">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <div class="card card-primary">
            <div class="card-body">
            <form method="post" action="{{ url('drink/'. $drink->id )}}" enctype="multipart/form-data">   
                                        @method('patch')
                                        @csrf
                                            <div class="form">
                                                <label for="drink_name">Nama Minuman</label>
                                                <input type="text" class="form-control @error('drink_name') is-invalid @enderror" id="drink_name" name="drink_name" required autofocus value="{{ old('drink_name', $drink->drink_name) }}">
                                                @error('drink_name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="form">
                                                <label for="price">Harga</label>
                                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required autofocus value="{{ old('price', $drink->price) }}">
                                                @error('price')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <br>
                                            <div class="button">
                                                <a class="btn btn-secondary" href="/kitchen/menuminuman" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <button type="submit" class="btn btn-primary" name="submit">Edit</button>
                                            </div>
                                     </form>

            
            </div>
            </div>
            </div>
          </div>
        </div>
    </section>
</div>


@endsection