@extends('layout.main')
@section('container')
    <div class="row justify-content-center p-5">
        <div class="col-md-8 input-field">
          @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif



      <div class="wrapper">
  <div class="login_box">
    <div class="login-header">
      
      <h1 class="h3 lg-3 fw-normal text-center"> <br> Login</h1>
      <form action="/login" method="post">
    </div>
    @csrf

    <div class="input_box">
      <label for="email">Email address</label>
      <input type="text input-field" id="user" name="email" class="form-control 
      @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
      @error ('email')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <i class="bx bx-user icon"></i>
    </div>

    <div class="input_box">
      <label for="password">Password</label>
      <input type="password" name="password" class="form-control 
      @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
      @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <i class="bx bx-lock-alt icon"></i>
    </div>

     

    <div class="input_box"> 
      <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Login</button>
    </div>
  </form>
    <div class="register text-white">
      <span> <p> Don't have account?</p><a href="/register"> Register Now!</a></span>
    </div>
  </div>
</div>
            {{-- <main class="form-signin">
                <h1 class="h3 lg-3 fw-normal text-center">Form Login</h1>
                <form action="/login" method="post">
                    @csrf
                  
                  <div class="form-floating">
                    <input type="text input-field" id="user" name="email" class="form-control 
                    @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error ('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control 
                    @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
              
                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <small>Don't have account? <a href="/register"> Register Now!</a></small>
            </main>
        </div>
    </div>     --}}

@endsection