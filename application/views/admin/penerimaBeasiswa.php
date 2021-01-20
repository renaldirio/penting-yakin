<?php

$response = file_get_contents('http://localhost/api-beasiswa/api-beasiswa/api/mahasiswa');
$result = json_decode($response, true);

$result = $result["result"];

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php $this->load->view("admin/_partials/head.php") ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Top Bar -->
                <?php $this->load->view("admin/_partials/topbar.php") ?>
                <!-- End of Top Bar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Penerima Beasiswa</h1>

                        <a href="<?php echo site_url("admin/Import") ?>" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> Tambah</a>

                        <a href="<?php echo site_url("admin/Import") ?>" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> import</a>

                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export</a>

                        <!-- Modal ADD-->
                        <!-- <?php $this->load->view("admin/_partials/modal.php") ?> 
                        <!-- end of modal add -->




                        <!-- <form method="POST" action="<?php echo base_url() ?>index.php/import/upload" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Unggah Fle Excel</label><br>
                                <input type="file" class="d-none d-sm-inline-block btn btn-sm shadow-sm" name="userfile" class="form-control">
                            </div>
                            <button type="submit" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                 <i class="fas fa-upload fa-sm text-white-50"></i> Upload
                            </button>
                        </form> -->

                    </div>
                    <!-- button    -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa Penerima Beasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NPM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Fakultas</th>
                                            <th>Jenis Beasiswa</th>
                                            <th>Semester</th>
                                            <th>Periode</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <?php foreach ($result as $tabel) : ?>
                                                <td><?= $tabel["npm"]; ?></td>
                                                <td><?= $tabel["nama"]; ?></td>
                                                <td><?= $tabel["prodi_nama"]; ?></td>
                                                <td><?= $tabel["fakultas_nama"]; ?></td>
                                                <td><?= $tabel["beasiswa"]; ?></td>
                                                <td><?= $tabel["semester"]; ?></td>
                                                <td><?= $tabel["periode"]; ?></td>
                                                <td><a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i class="fas fa-edit fa-sm text-white-50"></i></a>
                                                    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i class="fas fa-trash fa-sm text-white-50"></i></a>
                                                </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <!-- <?php echo $this->pagination->create_links(); ?> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("admin/_partials/scrolltop.php") ?>

    <!-- Logout Modal-->
    <?php $this->load->view("admin/_partials/modal.php") ?>

    <!-- Javascript -->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>