<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
        </div>

        <div class="form-group">
            <label>Role</label>
            <select name="role_id" class="form-control">
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="is_active" class="form-control">
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
        <a href="<?= base_url('admin/users'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
