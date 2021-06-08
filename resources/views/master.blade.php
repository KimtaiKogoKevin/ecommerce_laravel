
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />

    <!-- Box Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"> 

    <title>CBF</title>
    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
 <!-- Latest compiled and minified CSS -->
<!-- -->

<!-- Font awesome -->
<script src="https://kit.fontawesome.com/345d606903.js" crossorigin="anonymous"></script>
<!-- -->


<!--Css style -->

<link rel="stylesheet" href="{{asset('css/app.css')}}">


<!-- -->

 <!-- GSAP -->
 <script>"https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"</script>

 <!-- Custom Script -->
</head>
<body>

{{View::make('header')}}


    @yield('content')

   


{{View::make('footer')}}


 
</body>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('js/index.js')}}"> 

</html>
