@extends('login.layouts.main')

@section('bodyauth')
<main class="form-signin">
  <form class="row g-3" action="/daftar" method="POST">
    @csrf
    <div class="form-floating mb-1">
      <input type="number" class="form-control @error('nim') is-invalid @enderror" name="nim" required>
      <label for="floatingInput">Nim</label>
    </div>
    <div class="form-floating mb-1">
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>
      <label for="floatingInput">Nama lengkap</label>
    </div>
    <div class="form-floating mb-1">
      <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control  @error('password2') is-invalid @enderror" name="password2" placeholder="Password">
      <label for="floatingPassword">Konfirmasi Ulang Password</label>
    </div>
    
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Daftar</button>
    </div>
  </form>
  </main>
@endsection