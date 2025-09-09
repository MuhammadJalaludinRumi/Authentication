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
                                <h3>Role Access</h3>


                                <?= $this->session->flashdata('message'); ?>

                                <h7>Role : <?= $role['role']; ?></h7>
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
                                                <th scope="col">Menu</th>
                                                <th scope="col">Access</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($menu as $m) : ?>
                                                <tr>
                                                    <td><?= $m['id']; ?></td>
                                                    <td><?= $m['menu']; ?> </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                <?= check_access($role['id'], $m['id']); ?>
                                                                data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                                        </div>
                                                    </td>
                                                </tr>

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
        <script>
            $('.form-check-input').on('click', function() {
                const menuId = $(this).data('menu');
                const roleId = $(this).data('role');

                $.ajax({
                    url: "<?= base_url('admin/changeaccess'); ?>",
                    type: 'post',
                    data: {
                        menuId: menuId,
                        roleId: roleId
                    },
                    success: function() {
                        document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                    }
                });
            });
        </script>
        </body>

        <!-- Mirrored from polygons.space/lime/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 03:10:25 GMT -->

        </html>