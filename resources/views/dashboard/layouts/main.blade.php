<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Syaiful Restoran Dashboard</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">

  @vite('../node_modules/bootstrap/dist/css/bootstrap.css')

  <link rel="stylesheet" href="css/dashboard.css">

  <!-- Custom styles for this template -->
  {{-- <link href="dashboard.css" rel="stylesheet"> --}}
</head>

<body>

  @include('dashboard.layouts.header')

  <div class="container-fluid">
    <div class="row">
      @include('dashboard.layouts.sidebar')
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
      </main>

    </div>

  </div>


  @vite('../node_modules/bootstrap/dist/js/bootstrap.js')

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

  <script src="/js/dashboard.js"></script>

</body>

</html>
