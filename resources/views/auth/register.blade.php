<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - JadiAdu</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/logo.svg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style-landing.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: OnePage - v4.10.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- Section: Design Block -->
<section class="text-center">
    <!-- Background image -->
    <div class="p-5 bg-image" style="
          background-image: url('{{asset('assets/img/login-1.jpg')}}');
          height: 300px;
          "></div>
    <!-- Background image -->

    <div class="card mx-4 mx-md-5 shadow-5-strong" style="
          margin-top: -100px;
          background: hsl(175deg 29% 87% / 80%);
          backdrop-filter: blur(30px);
          ">
      <div class="card-body py-5 px-md-5">

        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h2 class="fw-bold mb-5">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
              <!-- Email input -->
              <div class="form-outline mb-4 text-start">
                  <label class="form-label" for="nik">NIK</label>
                  <input type="text" id="nik" name="nik" :value="old('nik')" class="form-control" required autofocus/>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4 text-start">
                  <label class="form-label" for="name">Nama</label>
                  <input type="text" id="name" name="name" :value="old('name')" class="form-control" required/>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4 text-start">
                  <label class="form-label" for="email">Email</label>
                  <input type="email" id="email" name="email" :value="old('email')" class="form-control" required/>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4 text-start">
                  <label class="form-label" for="phone">No Telpon</label>
                  <input type="text" id="phone" name="phone" :value="old('phone')" class="form-control" required/>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4 text-start">
                  <label class="form-label" for="password">Password</label>
                  <input type="password" id="password" name="password" class="form-control" required/>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4 text-start">
                  <label class="form-label" for="password_confirmation">Password</label>
                  <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required/>
              </div>

              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-4">
                Sign up
              </button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/landing.js"></script>

</body>

</html>
