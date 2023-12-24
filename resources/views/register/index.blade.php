@extends('layout.main')

@section('container')

<div class="wrapper p-5">
  <div class="login_box">
    <div class="login-header">
      
      <h1 class="h3 lg-3 fw-normal text-center"> <br> Registration</h1>
      <form action="/register" method="post">
    </div>
    @csrf

    <div class="input_box">
      <label for="name">Name</label>
      <input type="text" name="name" class="form-control rounded-top 
      @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
      @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <i class="bx bx-user icon"></i>
    </div>

    <div class="input_box">
      <label for="username">UserName</label>
      <input type="text" name="username" class="form-control 
      @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
      @error ('username')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <i class="bx bx-lock-alt icon"></i>
    </div>

    <div class="input_box">
      <label for="email">Email address</label>
      <input type="text" name="email" class="form-control 
      @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
        @error ('email')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      <i class="bx bx-lock-alt icon"></i>
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
      <button class="w-100 btn btn-lg btn-dark mt-3" type="submit">Register</button>
    </div>

    <div class="register text-white">
      <span>Back to <a href="/login">Login</a></span>
    </div>
  </div>
</div>


{{-- <div class="row justify-content-center p-5">
        <div class="col-md-8">
            <main class="form-registration">
                <h1 class="h3 lg-3 fw-normal text-center">Form Register</h1>
                <form action="/register" method="post">
                    @csrf
                  <div class="form-floating">
                    <input type="text" name="name" class="form-control rounded-top 
                    @error('name') is-invalid @enderror" id="name" placeholder="name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="username" class="form-control 
                    @error('username') is-invalid @enderror" id="username" placeholder="username" required value="{{ old('username') }}">
                    <label for="username">UserName</label>
                    @error ('username')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="text" name="email" class="form-control 
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
              
                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                </form>
                <small>Back to <a href="/login">Login</a></small>
            </main>
        </div>
    </div>     --}}

@endsection