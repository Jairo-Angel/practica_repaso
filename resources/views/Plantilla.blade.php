<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet"  href="/css/styles.css">

    <title>Libreria</title>
</head>
<body style="">
    <nav class="navbar navbar-expand-lg bg-light navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Libros bonitos</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Registro">Registrar Libros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Libros">Ver Libros</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href={{route('autor.create')}}>Registrar Autores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/Autores">Ver Autores</a>
              </li>

            </ul>
        
      </nav>
      
      @yield('contenido')
      <footer class="main-footer mt-5">
      <div class="alert alert-secondary fw-bold text-center" role ="alert" id="pie">
        Libros bonitos copyright© {{date('D/M/Y')}}
      </div>
      </footer>
      



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</body>
</html>