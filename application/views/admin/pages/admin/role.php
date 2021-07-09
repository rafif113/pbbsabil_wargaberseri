    <div class="content-page">
    	<div class="content">
    		<!-- Begin Page Content -->
    		<div class="container-fluid">

    			<!-- Page Heading -->
    			<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    			<?= form_error('role', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    			<?= $this->session->flashdata('message'); ?>
    			<div class="row">
    				<div class="col-lg-6">
    					<a href="" class="btn btn-primary mb-3 newRoleModalButton" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>
    					<table class="table table-hover">
    						<thead>
    							<tr>
    								<th scope="col">#</th>
    								<th scope="col">Role</th>
    								<th scope="col">Action</th>
    							</tr>
    						</thead>
    						<tbody>
    							<?php $no = 1; ?>
    							<?php foreach ($role as $r) : ?>
    								<tr>
    									<th scope="row"><?= $no ?></th>
    									<td><?= $r['role'] ?></td>
    									<td>
    										<a href="<?= base_url("admin/admin/roleAccess/$r[id]"); ?>" class="badge badge-warning">Access</a>
    										<a href="<?= base_url("admin/admin/updateRole/$r[id]"); ?>" class="badge badge-success updateRoleModalButton" data-toggle="modal" data-target="#newRoleModal" data-id="<?= $r['id'] ?>">Edit</a>
    										<a href="<?= base_url("admin/admin/deleteRole/$r[id]"); ?>" class="badge badge-danger" onclick="return confirm('Are you sure?');">Delete</a>
    									</td>
    								</tr>
    								<?php $no++; ?>
    							<?php endforeach ?>
    						</tbody>
    					</table>
    				</div>
    			</div>

    		</div>
    		<!-- /.container-fluid -->
    	</div>
    </div>
    </div>
    <!-- End of Main Content -->

    <!-- Modal -->
    <div class="modal fade" id="newRoleModal" tabindex="-1" aria-labelledby="newRoleModalLabel" aria-hidden="true">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
    			</div>
    			<form action="<?= base_url('admin/admin/role') ?>" method="post">
    				<input type="hidden" name="id" id="id">
    				<div class="modal-body">
    					<div class="form-group">
    						<input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
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
