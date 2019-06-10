<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>


            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $admin['nama']; ?></span>
                        <img class="img-profile rounded-circle" src="<?= base_url('../assets/img/admin.png'); ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profile
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('#'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container">

            <!-- Page Heading -->
            <h1 class=" h3 mb-4 text-gray-800"><?= $title; ?></h1>
            <div class="container" style="margin-top: 50px">
                <div class="col-md-12 centered">
                    <div class="card mb-5 mt-4">
                        <div class="card-body">
                            <?php foreach ($event as $ev) { ?>
                                <?= form_open('event/simpanEvent'); ?>
                                <!--  <form action="<?= base_url('produk/editProduk'); ?>" method="post"> -->
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Id event</label>
                                        <input type="text" class="form-control" value="<?= $ev->id_event; ?>" name="id">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Nama Event</label>
                                        <input type="text" class="form-control" value="<?= $ev->nama_event; ?>" name="nama">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleFormControlTextarea1">Deskripsi Event</label>
                                        <textarea class="form-control" id="des" name="des" rows="3" value="<?= $ev->deskripsi; ?>"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Harga produk">Tanggal Event</label>
                                        <input type="date" class="form-control" value="<?= $ev->tanggal; ?>" name="tgl">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="Masukan Foto Produk">Masukan Foto Event</label>
                                        <input type="file" class="form-control-file" value="<?= $ev->foto_event; ?>" name="foto">
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="card-footer">
                            <button class="btn btn-primary float-right ml-1">Simpan</button>
                            <?= form_close(); ?>
                            <a href="<?= base_url('event/dataEvent'); ?>" class="btn btn-danger float-right">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Konakito.com 2019</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</div>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>