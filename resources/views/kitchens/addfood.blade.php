@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Tambah Menu Makanan</h3>
        </div>
        <div class="section-body">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <div class="card card-primary">
            <div class="card-body">
            {{-- menampilkan error validasi --}}
                  @if (count($errors) > 0)
                     <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                      </div>
                  @endif
            <form method="POST" action="{{ route('menumakanan') }}">
                  @method('patch')
                  @csrf
                  <div class="form-group">
                    <label for="food_name">Nama Makanan</label>
                    <input id="food_name" type="text" class="form-control " name="food_name" value="{{ old('food_name') }}"  autofocus>
                  </div>
                  <div class="form-group">
                    <label for="price">Price</label>
                    <input id="price" type="price" class="form-control " name="price" value="{{ old('price') }}" >
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    {{ __('Tambah Menu') }}
                    </button>
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