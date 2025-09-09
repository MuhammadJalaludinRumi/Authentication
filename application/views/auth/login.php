
<div class="container">
    <div class="login-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-9 lfh">
                <div class="card login-box">
                    <div class="card-body">
                        <h5 class="card-title">Sign In</h5>

                        <?= $this->session->flashdata('message'); ?>

                        <form method="post" action="<?= base_url('auth'); ?>">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?= set_value('email'); ?>">
                                 <?= form_error('email', '<small class="text-danger">', '</small>'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                 <?= form_error('password', '<small class="text-danger">', '</small>'); ?></small>
                            </div>
                            <a href="#" class="float-left forgot-link">Forgot password?</a>
                            <button type="submit" class="btn btn-primary float-right m-l-xxs">Sign In</button>
                            <a href="<?= base_url('auth/registration'); ?>" class="btn btn-secondary float-right">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>