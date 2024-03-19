@extends('login.layouts.main')

@section('bodyauth')

@if(session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

@if(session()->has('loginError'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

<main class="form-signin">
    <form action="/login" method="post">
      @csrf
       <h1 class="h3 mb-3 fw-normal">Login</h1>
  
      {{-- <div class="form-floating">
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" @error('email') is-invalid @enderror autofocus required value="{{ old('email') }}">
        <label for="email">Email address</label>
        @error('email') 
        <div class="invalid-feedback d-block">
          {{ $message }}
        </div> 
        @enderror
      </div> 
      {{-- <div class="form-floating">
        <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
        <label for="password">Password</label>
      </div> --}}
      <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-4 col-form-label text-start">Username</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="username">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-4 col-form-label text-start">Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="password">
        </div>
      </div>
      <button class="w-30 btn btn-sm btn-primary float-end" type="submit">Sign in</button>
    </form>
  </main>
@endsection