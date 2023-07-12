<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/img/icon.svg" type="image/x-icon">
    <title>Mole App</title>
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="/css/build.css">
    <link rel="stylesheet" href="/css/fav.css">
    <link rel="stylesheet" href="/css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
<body>
<!--navbar-->
@if (Auth::check())
  @include('part.navbarUser')
@else
  @include('part.navbar')
@endif
<!--end-->

{{-- content --}}
@yield('content')

<!--footer-->
@include('part.footer')
<!--end-->
    <!--animasi aos-->
    @include('sweetalert::alert')
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!--end-->


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>