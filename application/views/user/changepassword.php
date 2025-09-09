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
                                    <h3>Change Password</h3>
                                    <div class="row">
                                        <div class="col-xl ">
                                            <?= $this->session->flashdata('message') ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl">
                                <form action="<?= base_url('user/changepassword'); ?>" method="post">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Change Password</h5>
                                            <div class="form-group">
                                                <label for="current_password">Current Password</label>
                                                <input type="password" name="current_password" class="form-control" id="current_password" aria-describedby="emailHelp" placeholder="Current Password">
                                                <?= form_error('current_password', '<small class="text-danger">', '</small>'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password1">New Password</label>
                                                <input type="password" name="new_password1" class="form-control" id="new_password1" placeholder="New Password">
                                                <?= form_error('new_password1', '<small class="text-danger">', '</small>'); ?></small>
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password2">Repeat Password</label>
                                                <input type="password" name="new_password2" class="form-control" id="new_password2" placeholder="New Password">
                                                <?= form_error('new_password2', '<small class="text-danger">', '</small>'); ?></small>

                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Change Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
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
            </body>

            <!-- Mirrored from polygons.space/lime/theme/templates/admin1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Jul 2025 03:10:25 GMT -->

            </html>