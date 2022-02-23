<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/mdi/css/materialdesignicons.min.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/css/vendor.bundle.base.css" }}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/jvectormap/jquery-jvectormap.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/flag-icon-css/css/flag-icon.min.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.css" }}>
    <link rel="stylesheet" href={{ "dashboard/assets/vendors/owl-carousel-2/owl.theme.default.min.css" }}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{"../../dashboard/assets/css/style.css"}}>

    <style>
        body{
            padding: 10px;
            margin: 20px;
        }
    </style>
  </head>
  <body>
<div class="table-responsive">
    <table  id="table" class="table table-dark">
        <h4 class="card-title">Laporan Pengunjung</h4>
      <thead>
        <tr>
          <th> No </th>
          <th> Nama Pelanggan </th>
          <th> Menu </th>
          <th> Jumlah </th>
          <th> Total  </th>
          <th> Nama Pegawai </th>
        </tr>
      </thead>
      <tbody>
          @foreach ($kasirs as $kasir)
        <tr>
          <td> {{ ++$i }}  </td>
          <td> {{ $kasir->nama_pelanggan }} </td>
          <td> {{ $kasir->nama_menu }} </td>
          <td> {{ $kasir->jumlah }} </td>
          <td>Rp.{{ $kasir->total_harga}} </td>
          <td> {{ $kasir->nama_pegawai }} </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <br>
    <a class="btn btn-outline-secondary btn-fw ms-auto" href="{{ route('laporan.index') }}">Kembali</a>
  </div>
  <script>
    window.print();
</script>
  <script src={{ "dashboard/assets/vendors/js/vendor.bundle.base.js" }}></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src= "dashboard/assets/vendors/chart.js/Chart.min.js"></script>
  <script src={{ "dashboard/assets/vendors/progressbar.js/progressbar.min.js" }}></script>
  <script src={{ "dashboard/assets/vendors/jvectormap/jquery-jvectormap.min.js" }}></script>
  <script src={{ "dashboard/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" }}></script>
  <script src={{ "dashboard/assets/vendors/owl-carousel-2/owl.carousel.min.js" }}></script>
  <script src={{ "dashboard/assets/js/jquery.cookie.js"  }}type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src={{ "dashboard/assets/js/off-canvas.js" }}></script>
  <script src={{ "dashboard/assets/js/hoverable-collapse.js" }}></script>
  <script src={{ "dashboard/assets/js/misc.js" }}></script>
  <script src={{ "dashboard/assets/js/settings.js" }}></script>
  <script src={{ "dashboard/assets/js/todolist.js" }}></script>
  <!-- endinject -->
  <!-- Custom js for this page -->
  <script src={{ "dashboard/assets/js/dashboard.js" }}></script>
  <!-- End custom js for this page -->
</body>
</html>