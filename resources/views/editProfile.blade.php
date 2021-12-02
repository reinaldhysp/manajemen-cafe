@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Edit Profil</h3>
        </div>
        <div class="section-body">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <div class="card card-primary">
              <div class="card-body">
              <form method="post" action="#" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="name" type="text" class="form-control " name="name" value="{{ old('name', $users->name) }}" required autocomplete="name" autofocus>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('name', $users->email) }}" required autocomplete="email">
                </div>
                <div class="button">
                    <a class="btn btn-info" href="/tampilprofile" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <button type="submit" class="btn btn-warning">Edit</button>
                </div>
            </form>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>


@endsection