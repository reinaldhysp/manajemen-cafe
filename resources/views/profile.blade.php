@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Profil {{$users->name}}</h3>
        </div>
        <div class="section-body">
        <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">
            <div class="card card-primary">
              <div class="card-body">
                <form action="/tampilprofile" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name"><h4>{{$users->name}}</h4></label><br>
                        <label for="avatar"><img src="/uploaded/avatar/{{$users->avatar}}" alt="gambar" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"></label>
                        <input type="file" name="avatar">
                    </div>
                    <div class="button">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-info" href="/home" role="button">Kembali</a>&nbsp;
                        <button type="submit" class="btn btn-primary">Unggah Foto</button>&nbsp;&nbsp;<a class="btn btn-warning" href="{{route('profile.edit')}}" role="button">Edit Profil</a>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </section>
</div>


@endsection