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
                                <h3>Profile</h3>
                                <div class="row">
                                    <div class="col-xl ">
                                        <?= $this->session->flashdata('message') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl ">
                            <div class="profile-cover"></div>
                            <div class="profile-header">
                                <div class="profile-img">
                                    <img src="<?= base_url('assets/images/profile/') . $user['image']; ?>">
                                </div>
                                <div class="profile-name">
                                    <h3><?= $user['name'] ?></h3>
                                </div>
                                <div class="profile-header-menu">
                                    <ul class="list-unstyled">
                                        <li><a href="#" class="active">Feed</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">Friends</a></li>
                                        <li><a href="#">Photos</a></li>
                                        <li><a href="#">Videos</a></li>
                                        <li><a href="#">Music</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">About</h5>
                                    <p>Quisque vel tellus sit amet quam efficitur sagittis. Fusce aliquam pulvinar suscipit.</p>
                                    <ul class="list-unstyled profile-about-list">
                                        <li><i class="material-icons">school</i><span>Studied Mechanical Engineering at <a href="#">Carnegie Mellon University</a></span></li>
                                        <li><i class="material-icons">work</i><span>Former manager at <a href="#">Stacks</a></span></li>
                                        <li><i class="material-icons">my_location</i><span>From <a href="#">Boston, Massachusetts</a></span></li>
                                        <li><i class="material-icons">rss_feed</i><span>Followed by 716 people</span></li>
                                        <li>
                                            <button class="btn btn-block btn-primary m-t-lg">Follow</button>
                                            <button class="btn btn-block btn-secondary m-t-lg">Message</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Contact Info</h5>
                                    <ul class="list-unstyled profile-about-list">
                                        <li><i class="material-icons">mail_outline</i><span><?= $user['email'] ?></span></li>
                                        <li><i class="material-icons">home</i><span>Lives in <a href="#">San Francisco, CA</a></span></li>
                                        <li><i class="material-icons">local_phone</i><span>+1 (678) 290 1680</span></li>
                                        <li><i class="material-icons">info</i><span>Member Since <?= date('d F Y', $user['date_created']); ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="lime-footer">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <span class="footer-text">Website Bosen <?= date('Y'); ?></span>
                                        </div>
                                    </div>
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