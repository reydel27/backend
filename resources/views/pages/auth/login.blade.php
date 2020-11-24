@extends('templates.auth.main')
@section('content')
<form class="form-signin" style="border: #00000052 solid 1px;box-shadow: inset 0 0 2px #403a3a73;" action="{{ route('login') }}" method="post">
    @csrf
    <h1 class="h3 mb-3 mt-3 font-weight-normal">Login</h1>
    @if(session('status'))
    <div class="alert alert-warning" id="alert">
        {{ session('status') }}
    </div>
    @endif
    @if(session('success'))
    <div class="alert alert-success" id="alert">
        {{ session('success') }}
    </div>
    @endif    
    <div class="form-group">
        <input type="email" name="email" class="form-control @error('email') border-red @enderror" placeholder="Email address" autocomplete="off" value="{{ old('email') }}">
        @error('email')
        <p class="text-red"><small>{{ $message }}</small></p>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" id="password" name="password" class="form-control @error('password') border-red @enderror" placeholder="Password" autocomplete="off">
        @error('password')
        <p class="text-red"><small>{{ $message }}</small></p>
        @enderror
    </div>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" id="remember"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in!</button>
</form>
@endsection