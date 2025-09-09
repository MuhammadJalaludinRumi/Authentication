<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $edit_user['id']; ?>">

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?= $edit_user['name']; ?>" class="form-control">
            <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="<?= $edit_user['email']; ?>" class="form-control" readonly>
        </div>

        <div class="form-group">
            <label>Role</label>
            <select name="role_id" class="form-control">
                <option value="1" <?= $edit_user['role_id']==1 ? 'selected' : ''; ?>>Admin</option>
                <option value="2" <?= $edit_user['role_id']==2 ? 'selected' : ''; ?>>User</option>
            </select>
        </div>

        <div class="form-group">
            <label>Status</label>
            <select name="is_active" class="form-control">
                <option value="1" <?= $edit_user['is_active']==1 ? 'selected' : ''; ?>>Active</option>
                <option value="0" <?= $edit_user['is_active']==0 ? 'selected' : ''; ?>>Inactive</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="<?= base_url('admin/users'); ?>" class="btn btn-secondary">Cancel</a>
    </form>
</div>
