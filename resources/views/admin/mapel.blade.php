<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SMK Teratai Putih Jakarta</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('vendors/feather/feather.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/css/vendor.bundle.base.css')}}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
  <link rel="stylesheet" href="{{asset('vendors/ti-icons/css/themify-icons.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('js/select.dataTables.min.css')}}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
    <!-- endinject -->
  <link rel="shortcut icon" href="../../img/logo_tpj.png" />
    <!-- font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <img  style="width: 50px" src="{{ asset('img/logo_tpj.png') }}" alt=""></a>
        <a href="{{route('dashboard')}}" class="sidebar-brand-text mx-1 font-weight-bold text-decoration-none text-body">SMK TERPUJA</a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="{{ asset('img/logo_tpj.png') }}" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </ul>
      </div>
    </nav>

    {{-- Modal Logout --}}
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Logout?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Apakah Anda Yakin untuk logout?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link disable" href="{{route('dashboard')}}">
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" href="{{route('siswa.index')}}">
              <span class="menu-title">Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" href="{{route('mapel.index')}}">
              <span class="menu-title">Mata Pelajaran</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link disable" href="{{route('rapor.index')}}">
              <span class="menu-title">Rapor</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- Card Body -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-xl-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Mata Pelajaran</h6>
                    </div>
                <div class="card-body">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah</button>
                    <div class="table-responsive mt-3">
                        <table id="datatablesSimple" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>KKM</th>
                                    <th>Jenis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($mapel as $mp)
                            <tbody>
                                <tr>
                                    <td>{{$i}}</td>
                                    <td>{{$mp->nama}}</td>
                                    <td>{{$mp->kkm}}</td>
                                    <td>{{$mp->jenis}}</td>
                                    <td><a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah_mapel{{$mp->id}}"><i class="fa-solid fa-pen to-square mr-1"></i>Ubah</a>
                                        <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_mapel{{$mp->id}}"><i class="fa-solid fa-trash to-square mr-1"></i>Hapus</a></td>
                                </tr>
                            </tbody>
                            @php
                                $i++;
                            @endphp
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>

            </div>



        </div>
      </div>



    <!-- Modal Tambah -->
  <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ubahTabel">Tambah Data Mata Pelajaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('mapel.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Mapel</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="usernama" name="nama">
                </div>
                <div class="form-group">
                    <label for="kkm">KKM</label>
                    <input type="number" class="form-control" id="kkm" aria-describedby="kkm" name="kkm">
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="width: 100%" name="jenis" id="jenis" required>
                        <option selected disabled value="">Pilih Jenis</option>
                        <option value="Normatif">Normatif</option>
                        <option value="Adaptif">Adaptif</option>
                        <option value="Kompetensi Kejuruan">Kompetensi Kejuruan</option>
                        <option value="Muatan Lokal">Muatan Lokal</option>
                    </select>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </div>
      </form>
    </div>
  </div>

    <!-- Modal Ubah -->
    @foreach ($mapel as $mp)
    <div class="modal fade" id="ubah_mapel{{$mp->id}}" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ubahTabel">Ubah Data Mata Pelajaran</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{url('admin/mapel')}}/{{$mp->id}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="nama">Nama Mapel</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="usernama" name="nama" value="{{$mp->nama}}">
                </div>
                <div class="form-group">
                    <label for="kkm">KKM</label>
                    <input type="number" class="form-control" id="kkm" aria-describedby="kkm" name="kkm" value="{{$mp->kkm}}">
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="width: 100%" name="jenis" id="jenis" required>
                        <option selected disabled value="">Pilih Jenis</option>
                        <option @if ($mp->jenis == "Normatif") @selected(true) @endif value="Normatif">Normatif</option>
                        <option @if ($mp->jenis == "Adaptif") @selected(true) @endif value="Adaptif">Adaptif</option>
                        <option @if ($mp->jenis == "Kompetensi Kejuruan") @selected(true) @endif value="Kompetensi Kejuruan">Kompetensi Kejuruan</option>
                        <option @if ($mp->jenis == "Muatan Lokal") @selected(true) @endif value="Muatan Lokal">Muatan Lokal</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <input type="hidden" name="_method" value="PUT">
              <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    @endforeach


     <!-- Modal Hapus -->
     @foreach ($mapel as $mp)
     <div class="modal fade" id="hapus_mapel{{$mp->id}}" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ubahTabel">Hapus Data</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <form action="{{url('admin/mapel')}}/{{$mp->id}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
              <button type="submit" class="btn btn-primary">Hapus</button>
              </form>
            </div>
          </div>
        </div>
      </div>
     @endforeach

        <!-- partial -->
    </div>
    <!-- page-body-wrapper ends -->

  <!-- plugins:js -->
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->
  @include('sweetalert::alert')

</body>

</html>

