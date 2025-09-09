<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<?= $this->session->flashdata('message'); ?>

	<a href="<?= base_url('admin/addUser'); ?>" class="btn btn-primary mb-3"> Add New User
	</a>

	<div class="table-responsive">
		<table class="table table-bordered">
			<thead class="thead-dark">
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Status</th>
					<th>Date Created</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1;
				foreach ($all_users as $u): ?>
					<tr>
						<td><?= $i++; ?></td>
						<td><?= $u['name']; ?></td>
						<td><?= $u['email']; ?></td>
						<td><?= $u['role_id'] == 1 ? 'Admin' : 'User'; ?></td>
						<td>
							<?php if ($u['is_active']): ?>
								<span class="badge badge-success">Active</span>
							<?php else: ?>
								<span class="badge badge-danger">Inactive</span>
							<?php endif; ?>
						</td>
						<td><?= date('d M Y', $u['date_created']); ?></td>
						<td>
							<a href="<?= base_url('admin/editUser/' . $u['id']); ?>" class="btn btn-success btn-sm">Edit
							</a>
							<a href="<?= base_url('admin/deleteUser/' . $u['id']); ?>"
								class="btn btn-danger btn-sm"
								onclick="return confirm('Yakin hapus user ini?');">Delete
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>
<script src="<?= base_url('assets/'); ?>plugins/jquery/jquery-3.1.0.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/popper.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/chartjs/chart.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url('assets/'); ?>plugins/toastr/toastr.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/lime.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/pages/dashboard.js"></script>
