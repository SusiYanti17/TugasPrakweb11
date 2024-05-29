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
            <h1>Dashboard Dokter</h1>
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
          <h3 class="card-title">Dokter</h3>

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
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Nama Dokter</th>
                  <th>Gender</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Kategori</th>
                  <th>Telpon</th>
                  <th>Alamat</th>
                  <th>Unit Kerja</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data_dokter as $dokter)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $dokter->id }}</td>
                  <td>{{ $dokter->nama }}</td>
                  <td>{{ $dokter->gender }}</td>
                  <td>{{ $dokter->tmp_lahir }}</td>
                  <td>{{ $dokter->tgl_lahir }}</td>
                  <td>{{ $dokter->kategori }}</td>
                  <td>{{ $dokter->telpon }}</td>
                  <td>{{ $dokter->alamat }}</td>
                  <td>{{ $dokter->unit_kerja_id }}</td>
                  <td>
                    <a href=""><button class="btn btn-success">Detail</button></a>
                    <a href=""><button class="btn btn-warning">Edit</button></a> 
                    <a href=""><button class="btn btn-danger">Hapus</button></a></td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
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