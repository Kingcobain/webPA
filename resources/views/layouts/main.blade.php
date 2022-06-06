<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    {{-- My Style --}}
    <link rel="stylesheet" href="css/style.css">

    <title>PA | {{ $title }}</title>
  </head>

  {{-- <style>

    body{
      background-image: url('img/bg2.jpg');
      background-size: 100%;
      background-position: center center;
      background-repeat: no-repeat;
      height: 100vh;
      width: 100%;
    }

  </style> --}}


  <body>

    @include('partials.navbar')
    <div>
        @yield('container')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </div>
  </body>

  {{-- Footer --}}
  @include('partials.footer')
</html>


