</body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container">
        <div class="row align-items-center justify-content-center vh-100">
            <div class="col-lg-9">
                <div class="shadow rounded-2">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bg-register h-100 rounded"></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5 ps-4 text-dark">
                                <h5 class="mb-1 fw-bold">Hello, Mole Lovers!</h5>
                                <p class="mb-4 text-muted">Please Login First!</p>
                                <form action="/login" method="POST">
                                    @csrf
                                      <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                      </div>

                                    <div class="row mb-3">
                                        <div class="col">
                                        <label for="password" class="form-label">Password</label>
                                        <input id="password" type="password" class="form-control" name="password" required >
                                        @error('[password]')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                        
                                    <div class="d-grid mb-3 mt-3">
                                        <button type="submit" class="btn btn-primary py-2">Login</button>
                                    </div>
                                </form>
                                
                                <p class="text-muted fz-13 text-center">Don't have account? <a href="/register" style="text-decoration: none">Sign-Up!</a></p>
                                <p class="text-muted fz-13 text-center"><a href="/" style="text-decoration: none">Back To home.</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>