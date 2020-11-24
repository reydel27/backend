@extends('templates.auth.main')
@section('content')
<form class="form-signin" style="border: #00000052 solid 1px;box-shadow: inset 0 0 2px #403a3a73;" action="{{ route('register') }}" method="post">
    @csrf
    <h1 class="h3 mb-3 mt-3 font-weight-normal">Register</h1>
    <div class="form-group">
        <input type="text" name="name" class="form-control @error('name') border-red @enderror" placeholder="Your name" autocomplete="off" value="{{ old('name') }}">
        @error('name')
        <p class="text-red"><small>{{ $message }}</small></p>
        @enderror
    </div>
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
    <div class="form-group">
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') border-red @enderror" placeholder="Password confirm" autocomplete="off">
        @error('password_confirmation')
            <p class="text-red"><small>{{ $message }}</small></p>
        @enderror      
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
</form>
@endsection