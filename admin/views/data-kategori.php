<?php include '../../cekadmin.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Data Kategori</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css" />
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css" />
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="../index.php" class="brand-link">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: 0.8" />
        <span class="brand-text font-weight-light"><b>Pecinta</b>Uang</span><br>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">Administrator</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="data-kategori.php" class="nav-link  active">
                <i class="nav-icon fas fa-file"></i>
                <p>Data Kategori</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="data-transaksi.php" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>Data Transaksi</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Hutang Piutang
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="data-hutang.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Hutang</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="data-piutang.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Piutang</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="../models/logout.php" class="nav-link">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Kategori</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                <li class="breadcrumb-item active">Data kategori</li>
              </ol>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus"></i> &nbsp Tambah Kategori
                  </button><br>
                  <?php include 'alert.php';?>

                  <form action="../models/m_kategori.php" method="POST">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">

                          <div class="form-group">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama_kategori" required="required" class="form-control" placeholder="Nama Kategori...">
                          </div>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th width="1%">NO</th>
                        <th>NAMA</th>
                        <th width="10%">OPSI</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        include '../../connection.php';
                        $id = 1;
                        $data = mysqli_query($kon,"SELECT * FROM tb_kategori ORDER BY nama_kategori ASC");
                        while ($row = mysqli_fetch_assoc($data)) {
                      ?>
                      <tr>
                        <td><?= $id++;?></td>
                        <td><?= $row['nama_kategori'];?></td>
                        <td>
                          <?php
                          if($row['id_kategori'] != 1){
                            ?>
                            <button type="button" class="btn btn-warning btn-sm" title="Edit Data" data-toggle="modal"
                              data-target="#edit_kategori<?= $row['id_kategori'];?>">
                              <i class="fa fa-cog"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm" title="Hapus Data" data-toggle="modal"
                              data-target="#hapus_kategori<?= $row['id_kategori'];?>">
                              <i class="fa fa-trash"></i>
                            </button>
                          <?php } ?>

                          <!-- Modal update -->
                          <form action="../models/m_kategori_edit.php" method="POST">
                            <div class="modal fade" id="edit_kategori<?= $row['id_kategori'];?>" tabindex="-1"
                              role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                    <div class="form-group" style="width:100%">
                                      <label>Nama Kategori</label>
                                      <input type="hidden" name="id" required="required" class="form-control"
                                        value="<?= $row['id_kategori'];?>">
                                      <input type="text" name="nama_kategori" required="required" class="form-control"
                                        placeholder="Nama Kategori..." value="<?= $row['nama_kategori'];?>" style="width:100%">
                                    </div>

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                          <!-- /Modal update -->

                          <!-- Modal hapus -->
                          <div class="modal fade" id="hapus_kategori<?= $row['id_kategori'];?>" tabindex="-1"
                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">

                                  <p>Apakah Anda Yakin Ingin Menghapus Data Ini ?</p>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                  <a href="../models/m_kategori_hapus.php?id=<?= $row['id_kategori'];?>" class="btn btn-primary">Hapus</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                  <br>
                  <a href="data-cetak-kategori.php" class="btn btn-secondary">Convert</a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'footer-tabel.php'; ?>
