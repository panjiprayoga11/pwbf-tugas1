@extends('auth/layout')

@section('content')
<div class="w-50 center border rounded px-3 py-3 mt-5 mx-auto">
    <h3>Login</h3><br>
    <form method="POST" action="/auth/login">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" type="email" name="email" value="{{ Session::get('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection