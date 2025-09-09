<div class="container">
    <div class="login-container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-9 lfh">
                <div class="card login-box">
                    <div class="card-body">
                        <h5 class="card-title">Sign Up</h5>
                        <form method="post" action="<?= base_url('auth/registration'); ?>">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" aria-describedby="userName" placeholder="Full Name" value="<?= set_value('name'); ?>">
                                <?= form_error('name', '<small class="text-danger">', '</small>'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Email Address" value="<?= set_value('email'); ?>">
                                <?= form_error('email', '<small class="text-danger">', '</small>'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password1" class="form-control" id="password1" placeholder="Password">
                                <?= form_error('password1', '<small class="text-danger">', '</small>'); ?></small>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password2" class="form-control" id="password2" placeholder="Confirm Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                            <a href="<?= base_url('auth'); ?>" class="btn btn-secondary">Sign In</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>