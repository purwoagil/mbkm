<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    {{-- <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <nav class="navbar navbar-light bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
      </div>
    </nav>
    <div class="container mt-4">
      
      <div class="row">
       <p class="text-start mb-1"> Merdeka Belajar Kampus  </p>
       <p class="text-start mb-1"> Sistem Informasi  </p>
       <p class="text-start mb-1"> Universitas Kristen Duta Wacana  </p>

      </div>
        <div class="row mt-4">
          <div class="col">
        
          </div>
          <div class="col">
            <div class="card text-center bg-light mb-3" style="max-width: 24rem;">
                @include('login.partials.navbar')
                <div class="card-body">
                  {{-- <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                  @yield('bodyauth')
                  
                </div>
              </div>
              Belum memiliki akun?<a href="/daftar">Registrasi</a>
          </div>
          <div class="col">
        
          </div>
        </div>
      </div>
    {{-- <div class="container mt-4 content-justify-center"> --}}
  

  </body>
</html>

