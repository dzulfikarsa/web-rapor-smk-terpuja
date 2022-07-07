<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SMK Teratai Putih Jakarta</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../img/logo_tpj.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{asset('img/logo_tpj.png')}}" style="width: 100px;margin-left: auto;margin-right: auto;display: block;" alt="">

              </div>
              <h1 class="h4 text-gray-900 font-weight-bold mb-4 text-center">SMK Teratai Putih Jakarta</h1>
              <br>

              @if (session('flash_message_error'))
                    <div class="alert alert-danger border-left-danger" role="alert">
                        <strong>Username/Password salah!</strong>

                    </div>
            @endif

              <form class="user" method="POST" action="{{url('proses_login')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="username" name="username"
                        placeholder="Masukkan Username" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control form-control-user"
                        id="password" name="password" placeholder="Masukkan Password" >
                </div>
                <button class="btn btn-info btn-user btn-block" type="submit">
                    Login
                </button>
                @if (!session('flash_message_error'))
                <br>
                <br>
                <br>
                <br>
                @else
                <br>


                @endif

            </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
