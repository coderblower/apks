<!doctype html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>APKS</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon_io/favicon.ico') }}">
    <link rel="manifest" href="{{asset('admin/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{asset('admin/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('admin/assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <div class="px-3">
          <div class="row min-vh-100 flex-center px-5">
            <div class="col-12 col-xl-10 col-xxl-8">
              <div class="row justify-content-center g-5">
                <div class="col-12 col-lg-6 text-center order-lg-1"><img class="img-fluid" src="{{ asset('admin/assets/img/spot-illustrations/500-illustration.png') }}" alt="" width="540"></div>
                <div class="col-12 col-lg-6 text-center text-lg-start"><img class="img-fluid mb-3 w-lg-75" src="{{ asset('admin/assets/img/spot-illustrations/500.png') }}" alt="">
                  <h2 class="text-800 fw-bolder mb-3">Unknow error!</h2>
                  <p class="text-900">But relax! Our cat is here to play you some music.</p><a class="btn btn-lg btn-primary" href="{{ route('home') }}">Go Home</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="{{ asset('admin/assets/js/phoenix.js') }}"></script>
  </body>

</html>