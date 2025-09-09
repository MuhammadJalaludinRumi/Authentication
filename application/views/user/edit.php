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
                                    <h3>Edit Profile</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl">
                                <?= form_open_multipart('user/edit'); ?>
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Edit</h5>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= $user['email']; ?>" readonly>
                                        </div> 
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" value="<?= $user['name']; ?>">
                                            <?= form_error('name', '<small class="text-danger">', '</small>'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Photo</label>
                                            <div class="d-flex align-items-center">
                                                <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>"
                                                    class="img-thumbnail mr-3"
                                                    style="width: 100px; height: 100px; object-fit: cover;">

                                                <div class="form-group">
                                                    <input type="file" name="image" class="form-control" id="image" style="width: 950px;">
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
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
