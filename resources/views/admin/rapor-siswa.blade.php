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
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('css/vertical-layout-light/style.css')}}">
      <!-- endinject -->
  <link rel="shortcut icon" href="../../img/logo_tpj.png" />
    <!-- font-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
                .coloumn {
            display: flex !important;
            justify-content: space-between !important;
        }
    </style>

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
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Rapor</h1>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card shadow mb-4">
                        <div
                            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Data Rapor {{ $siswa->nama }}</h6>
                        </div>
                                    <div class="card-body">
                                        <table>
                                            <thead>
                                                <div class="coloumn">
                                                    <div class="row_1">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h5>Nama</h5>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h5>: {{$siswa->nama}}</h5>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h5>Komp. Keahlian</h5>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h5>: Teknik Komputer dan Jaringan</h5>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h5>Program Keahlian</h5>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h5>: Teknik Komputer & Informatika</h5>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row_2">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <h5>NISN</h5>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h5>: {{$siswa->nis}}</h5>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h5>Kelas / Semester</h5>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h5>: XII / TKJ / 6 (Enam) </h5>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <h5>Tahun Pelajaran</h5>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <h5>: 2018 / 2019</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </thead>
                                        </table>

                            <div class="table-responsive mt-3">
                                <table id="datatablesSimple" class="table table-bordered">
                                    <thead>
                                        <tr class="text-center">
                                            <th rowspan="2" class="pd-5">No</th>
                                            <th rowspan="2">Mata Pelajaran</th>
                                            <th rowspan="2">KKM</th>
                                            <th colspan="4">Nilai Hasil Belajar</th>
                                        </tr>
                                        <tr class="text-center">
                                            <th>Angka</th>
                                            <th>Huruf</th>
                                            <th>Predikat</th>
                                            <th>Keterangan</th>
                                            <th>Pilihan</th>
                                        </tr>
                                        <tr>
                                            <th colspan="11">I. Normatif</th>
                                        </tr>
                                    </thead>

                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($rapor as $rp)
                                    @if ($rp->mapel->jenis != 'Normatif')
                                        @continue
                                    @endif
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{$i}}</td>
                                            <td>{{$rp->mapel->nama}}</td>
                                            <td>{{$rp->mapel->kkm}}</td>
                                            <td>{{$rp->nilai}}</td>
                                            <td>{{$rp->huruf}}</td>
                                            <td>{{$rp->predikat}}</td>
                                            <td>@if ($rp->nilai >= $rp->mapel->kkm)
                                                Terpenuhi
                                                @else
                                                Tidak Terpenuhi
                                                @endif</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah_siswa{{$rp->id_mapel}}">Ubah</a>
                                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_siswa{{$rp->id_mapel}}">Hapus</a></td>
                                            </td>
                                        </tr>


                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach

                                    <tr>
                                        <th colspan="11">II. Adaptif</th>
                                    </tr>

                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($rapor as $rp)
                                    @if ($rp->mapel->jenis != 'Adaptif')
                                        @continue
                                    @endif
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{$i}}</td>
                                            <td>{{$rp->mapel->nama}}</td>
                                            <td>{{$rp->mapel->kkm}}</td>
                                            <td>{{$rp->nilai}}</td>
                                            <td>{{$rp->huruf}}</td>
                                            <td>{{$rp->predikat}}</td>
                                            <td>@if ($rp->nilai >= $rp->mapel->kkm)
                                                Terpenuhi
                                                @else
                                                Tidak Terpenuhi
                                                @endif</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah_siswa{{$rp->id_mapel}}">Ubah</a>
                                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_siswa{{$rp->id_mapel}}">Hapus</a></td>
                                            </td>
                                        </tr>


                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach

                                    <tr>
                                        <th colspan="11">III. Kompetensi Kejuruan </th>
                                    </tr>

                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($rapor as $rp)
                                    @if ($rp->mapel->jenis != 'Kompetensi Kejuruan')
                                        @continue
                                    @endif
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{$i}}</td>
                                            <td>{{$rp->mapel->nama}}</td>
                                            <td>{{$rp->mapel->kkm}}</td>
                                            <td>{{$rp->nilai}}</td>
                                            <td>{{$rp->huruf}}</td>
                                            <td>{{$rp->predikat}}</td>
                                            <td>@if ($rp->nilai >= $rp->mapel->kkm)
                                                Terpenuhi
                                                @else
                                                Tidak Terpenuhi
                                                @endif</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah_siswa{{$rp->id_mapel}}">Ubah</a>
                                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_siswa{{$rp->id_mapel}}">Hapus</a></td>
                                            </td>
                                        </tr>


                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach

                                    <tr>
                                        <th colspan="11">IV. Muatan Lokal </th>
                                    </tr>

                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach ($rapor as $rp)
                                    @if ($rp->mapel->jenis != 'Muatan Lokal')
                                        @continue
                                    @endif
                                    <tbody>
                                        <tr>
                                            <td class="text-center">{{$i}}</td>
                                            <td>{{$rp->mapel->nama}}</td>
                                            <td>{{$rp->mapel->kkm}}</td>
                                            <td>{{$rp->nilai}}</td>
                                            <td>{{$rp->huruf}}</td>
                                            <td>{{$rp->predikat}}</td>
                                            <td>@if ($rp->nilai >= $rp->mapel->kkm)
                                                Terpenuhi
                                                @else
                                                Tidak Terpenuhi
                                                @endif</td>
                                            <td>
                                                <a href="" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#ubah_siswa{{$rp->id_mapel}}">Ubah</a>
                                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus_siswa{{$rp->id_mapel}}">Hapus</a></td>
                                            </td>
                                        </tr>


                                    @php
                                        $i++;
                                    @endphp
                                    @endforeach






                                    {{-- Ubah Data --}}
                                    @foreach ($rapor as $rp)
                                                <div class="modal fade" id="ubah_siswa{{$rp->id_mapel}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Data Nilai</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="{{url('admin/rapor-siswa')}}/{{$rp->id_mapel}}/{{$siswa->nis}}" method="POST">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <input type="number" id="nilai" name="nilai" placeholder="Masukkan Nilai" class="form-control" required max="100" min="0" autocomplete="off" value="{{$rp->nilai}}">
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea class="form-control" id="huruf" name="huruf" placeholder="Masukkan Huruf">{{$rp->huruf}}</textarea>
                                                                </div>
                                                            </div>


                                                            <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                                        <input type="hidden" name="_method" value="PUT">
                                                                    <button class="btn btn-warning" type="submit">Ubah</button>
                                                            </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>


                                                    {{-- Hapus Data --}}
                                                    <div class="modal fade" id="hapus_siswa{{$rp->id_mapel}}" tabindex="-1" role="dialog" aria-labelledby="hapus-siswa" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus data?</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Apakah Anda yakin ingin menghapus data?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                                                                <form action="{{url('admin/rapor-siswa')}}/{{$rp->id_mapel}}/{{$siswa->nis}}" method="GET">
                                                                    {{ csrf_field() }}
                                                                    <input type="hidden" name="_method">
                                                                    <button class="btn btn-danger" type="submit">hapus</button>
                                                                </form>

                                                            </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- page-body-wrapper ends -->

  <!-- plugins:js -->
  <script src="{{asset('vendors/js/vendor.bundle.base.js')}}"></script>
  <!-- endinject -->

</body>

</html>

