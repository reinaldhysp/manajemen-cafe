@extends('layout.template')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h3>Edit Worker</h3>
        </div>
        <div class="section-body">
            <form method="post" action="{{url('waiter/'.$waiter->id)}}">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" class="form-control " name="name" value="{{$worker->name}}" required autocomplete="name" autofocus>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control" name="email" value="{{$worker->email}}" required autocomplete="email">
            </div>
            <div class="form-group">
                <label for="role">Role</label>
                <select name="role" class="form-control ">
                    <option value="casir">casir</option>
                    <option value="waiter">waiter</option>
                    <option value="kitchen">kitchen</option>
                </select>
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input id="password" type="password" class="form-control"  name="password" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="email">Confirm Password</label>
                <input id="password-confirm" type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="button">
                <a class="btn btn-secondary" href="/casir/worker" role="button">Batal</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
    </section>
</div>


@endsection