@extends('template')

@section('content')
<div class="container mt-3">
    <h2>Login Admin</h2>

    @if(session('messages'))
    <div class="alert alert-danger">
        {{ session('messages') }}
    </div>
    @endif

    <form action="/administrator/auth" method="POST">
        @csrf
        <div class="mb-3 mt-3">
        <div class="mb-3 mt-3">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
        </div>
        <div class="mb-3">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
