@extends('auth/layout')

@section('content')
<div class="w-50 center border rounded px-3 py-3 mt-5 mx-auto">
    <h3>Register</h3><br>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-3">
            <label for="exampleInputNam1" class="form-label">Name</label>
            <input class="form-control" id="exampleInputName1" type="text" value="{{ old('name') }}" required autofocus>
            @error('name')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input class="form-control" id="exampleInputEmail1" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" required>
            @error('password')
            <span>{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection