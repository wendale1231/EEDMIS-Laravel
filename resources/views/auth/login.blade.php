@extends('layout')

@section('content')


<div class="animated bounceInDown">
  <div class="container">
    
    @error('email')
    <span class="error animated tada" style="display: block;" id="msg">
            <strong>{{ $message }}</strong>
    </span>
    @enderror
    <form name="form1" class="box" method="post" action="">
        @csrf
      <h4>EEDMO<span>Management System</span></h4>
      <h5>Login to your account.</h5>

        <input type="text" name="email" placeholder="Email" autocomplete="off">
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="password" placeholder="Passsword" id="pwd" autocomplete="off">
        <label>
          <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
          <span></span>
          <small class="rmb">Remember me</small>
        </label>
        
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="forgetpass">Forget Password?</a>
        @endif
        <!-- <button class="btn1" onclick="checkStuff()">Sign in</button> -->
        <input type="submit" value="Sign in" class="btn1">
      </form>

  </div>

  <div class="footer">
      <span>EEDMIS <a href="https://facebook.com/babblefour">By HalfByte</a></span>
  </div>

</div>


@endsection



@section('links')


<link href="{{ asset('/css/login.css') }}" rel="stylesheet">

<script src="{{ asset('js/login.js') }}" defer></script>
@endsection

