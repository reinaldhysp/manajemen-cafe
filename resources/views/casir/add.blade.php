@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Tambah Pekerja</h3>
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
            <form method="POST" action="{{ route('worker') }}">
                  @method('patch')
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="name" type="text" class="form-control " name="name" value="{{ old('name') }}"  autofocus>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control " name="email" value="{{ old('email') }}" >
                  </div>
                <div class="form-group">
                    <label for="role">Posisi</label>
                    <select name="role" class="form-control ">
                        <option value="casir">casir</option>
                        <option value="waiter">waiter</option>
                        <option value="kitchen">kitchen</option>
                    </select>
                </div>
                  <div class="form-group">
                    <label for="email">Kata Sandi</label>
                    <input id="password" type="password" class="form-control " name="password"  >
                  </div>
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                    {{ __('Daftar Pekerja') }}
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