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
                                <h3>Sub Menu Management</h3>

                                <a href="" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModalsub">Add New Submenu</a>
                                <?php if (validation_errors()): ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
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
                                                <th scope="col">Title</th>
                                                <th scope="col">Menu</th>
                                                <th scope="col">Url</th>
                                                <th scope="col">Icon</th>
                                                <th scope="col">Active</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($subMenu as $sm) : ?>
                                                <tr>
                                                    <td><?= $sm['id']; ?></td>
                                                    <td><?= $sm['title']; ?> </td>
                                                    <td><?= $sm['menu']; ?> </td>
                                                    <td><?= $sm['url']; ?> </td>
                                                    <td><span class="material-icons">
                                                            <?= $sm['icon']; ?>
                                                        </span>
                                                    </td>
                                                    <td><?= $sm['is_active']; ?> </td>
                                                    <td>
                                                        <a href="" class="btn btn-success" data-toggle="modal" data-target="#exampleModaledit<?= $sm['id'] ?>">Edit</a>
                                                        <a href="" class="btn btn-danger" data-toggle="modal" data-target="#exampleModaldelete<?= $sm['id'] ?>">Delete</a>
                                                    </td>
                                                </tr>
                                                <!-- Update Modal SubMenu -->
                                                <div class="modal fade" id="exampleModaledit<?= $sm['id'] ?>" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Edit Menu</h5> <!-- Ganti judul -->
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </div>
                                                            <form action="<?= base_url('menu/editsubmenu'); ?>" method="post">
                                                                <input type="hidden" name="id" value="<?= $sm['id'] ?>">
                                                                <div class="modal-body">
                                                                    <div class="mb-3">
                                                                        <label for="title" class="form-label">Title</label>
                                                                        <input type="text" name="title" class="form-control" id="title" value="<?= $sm['title'] ?>">
                                                                        <?= $this->session->flashdata('updated'); ?>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="menu" class="form-label">Menu</label>
                                                                        <select name="menu_id" class="form-control" id="menu_id">
                                                                            <?php foreach ($menu as $m) : ?>
                                                                                <option value="<?= $m['id']; ?>" <?= $m['id'] == $sm['menu_id'] ? 'selected' : ''; ?>>
                                                                                    <?= $m['menu']; ?>
                                                                                </option>
                                                                            <?php endforeach; ?>
                                                                            <?= $this->session->flashdata('updated'); ?>
                                                                        </select>

                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="menu" class="form-label">URL</label>
                                                                        <input type="text" name="url" class="form-control" id="url" value="<?= $sm['url'] ?>">
                                                                        <?= $this->session->flashdata('updated'); ?>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="menu" class="form-label">Icon</label>
                                                                        <input type="text" name="icon" class="form-control" id="icon" value="<?= $sm['icon'] ?>">
                                                                        <?= $this->session->flashdata('updated'); ?>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" name="is_active" id="is_active<?= $sm['id'] ?>" type="checkbox" value="1" <?= $sm['is_active'] ? 'checked' : ''; ?>>
                                                                            <label class="form-check-label" for="flexCheckDefault">
                                                                                Active?
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save</button> <!-- Ganti teks tombol -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Delete Modal Menu -->
                                                <div class="modal fade" id="exampleModaldelete<?= $sm['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete Menu</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <i class="material-icons">close</i>
                                                                </button>
                                                            </div>
                                                            <form action="<?= base_url('menu/deletesubmenu'); ?>" method="post">
                                                                <input type="hidden" name="id" value="<?= $sm['id'] ?>">
                                                                <div class="modal-body">
                                                                    Are you sure?, you deleted the menu <strong><span class="text-danger"><?= $sm['title'] ?></span></strong>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <a href="<?= base_url('menu/deletesubmenu/' . $sm['id']); ?>" class="btn btn-danger">Delete</a>
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

        <!-- Modal -->
        <div class="modal fade" id="exampleModalsub" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Sub Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i class="material-icons">close</i>
                        </button>
                    </div>
                    <form action="<?= base_url('menu/submenu'); ?>" method="post">
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control" id="menu" placeholder="Submenu Title">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Select Menu</label>
                                <select class="form-control" name="menu_id" id="menu_id" aria-label="Default select example">
                                    <option value="" selected>Open this select menu</option>
                                    <?php foreach ($menu as $m) : ?>
                                        <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"> URL</label>
                                <input type="text" name="url" class="form-control" id="url" placeholder="Submenu Url">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label"> Icon</label>
                                <input type="text" name="icon" class="form-control" id="icon" placeholder="Submenu Icon">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" name="is_active" id="is_active" type="checkbox" value="1" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Active?
                                </label>
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