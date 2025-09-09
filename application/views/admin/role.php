        <div class="lime-container">
            <div class="lime-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-title">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-separator-1">
                                        <li class="breadcrumb-item"><a href="#">Styles</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tables</li>
                                    </ol>
                                </nav>
                                <h3>Role</h3>
                                <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModal">Add New Role</a>
                                <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '
                                                </div>');  ?>

                                <?= $this->session->flashdata('message'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($role as $r) : ?>
                                                <tr>
                                                    <td><?= $r['id']; ?></td>
                                                    <td><?= $r['role']; ?> </td>
                                                    <td>
                                                        <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="btn btn-warning">Access</a>
                                                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModaledit<?= $r['id'] ?>">Edit</a>
                                                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModaldelete<?= $r['id'] ?>">Delete</a>
                                                    </td>
                                                </tr>
                                                <!-- Update Modal Menu -->
                                                <div class="modal fade" id="exampleModaledit<?= $r['id'] ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Menu</h5> <!-- Ganti judul -->
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </div>
                                                            <form action="<?= base_url('menu/editmenu'); ?>" method="post">
                                                                <input type="hidden" name="id" value="<?= $r['id'] ?>">
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="role" class="form-label">Menu Name</label>
                                                                        <input type="text" name="role" class="form-control" id="role" value="<?= $r['role'] ?>">
                                                                        <?= $this->session->flashdata('updated'); ?>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Add</button> <!-- Ganti teks tombol -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Delete Modal Menu -->
                                                <div class="modal fade" id="exampleModaldelete<?= $r['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete Menu</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </div>
                                                            <form action="<?= base_url('menu/deletemenu'); ?>" method="post">
                                                                <input type="hidden" name="id" value="<?= $r['id'] ?>">
                                                                <div class="modal-body">
                                                                    Are you sure?, you deleted the menu <strong><span class="text-danger"><?= $r['role'] ?></span></strong>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <a href="<?= base_url('menu/deletemenu/' . $r['id']); ?>" class="btn btn-danger">Delete</a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <?php $i ?>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lime-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="footer-text">2019 © stacks</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New ROle</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <form action="<?= base_url('admin/role'); ?>" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Role Name</label>
                                <input type="text" name="role" class="form-control" id="menu" placeholder="Role Name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


        <!-- Javascripts -->
        <script src="<?= base_url('assets/'); ?>plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="<?= base_url('assets/'); ?>plugins/bootstrap/popper.min.js"></script>
        <script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets/'); ?>plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url('assets/'); ?>plugins/chartjs/chart.min.js"></script>
        <script src="<?= base_url('assets/'); ?>plugins/apexcharts/dist/apexcharts.min.js"></script>
        <script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/lime.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/pages/dashboard.js"></script>
        </body>

        <!-- Mirrored from polygons.space/lime/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 03:10:25 GMT -->

        </html>