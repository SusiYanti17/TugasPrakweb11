<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.go-ogleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
 @include('layouts.header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('layouts.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard Biodata</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Admin</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered" >
  <thead>
    <tr>
      <th colspan="5"><h2>Biodata</h2></th>
    </tr>
    <tr>
      <th><h4>Nama</h4></th>
      <th><h4>Umur</h4></th>
      <th><h4>Email</h4></th>
      <th><h4>Kampus</h4></th>
      <th><h4>Alamat</h4></th>
    </tr>
  </thead>
  <tbody >
    <tr>
    </tr>
    <tr>
      <td><h8>Rina</h8></td>
      <td><h8>23</h8></td>
      <td><h8>rina@gmmail.com</h8></td>
      <td><h8>NF</h8></td>
      <td><h8>Medan</h8></td>
    </tr>
    <tr>
      <td><h8>Yola</h8></td>
      <td><h8>18</h8></td>
      <td><h8>yola@gmmail.com</h8></td>
      <td><h8>NF</h8></td>
      <td><h8>Palembang</h8></td>
    </tr>
    <tr>
      <td><h8>Annisa</h8></td>
      <td><h8>19</h8></td>
      <td><h8>annisa@gmmail.com</h8></td>
      <td><h8>UI</h8></td>
      <td><h8>Depok</h8></td>
    </tr>
    <tr>
      <td><h8>Dina</h8></td>
      <td><h8>20</h8></td>
      <td><h8>dina@gmmail.com</h8></td>
      <td><h8>UGM</h8></td>
      <td><h8>Bogor</h8></td>
    </tr>
  </tbody>
</table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  {{-- footer --}}
  @include('layouts.footer');
  {{-- tutup footer --}}


 