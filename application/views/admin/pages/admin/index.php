	<div class="content-page">
		<div class="content">
			<!-- Begin Page Content -->
			<div class="container-fluid">
				<!-- Page Heading -->
				<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
				<div class="card text-left">
					<div class="card-header">
						<?= $dashboard['header'] ?>
					</div>
					<div class="card-body">
						<h5 class="card-title"><?= $dashboard['title'] ?></h5>
						<p class="card-text"><?= $dashboard['content'] ?></p>
						<a href="<?= base_url('admin/DataMaster/dashboard'); ?>" class="btn btn-primary">Edit Dashboard</a>
					</div>
					<div class="card-footer text-muted">
						-<?= $dashboard['footer'] ?>
					</div>
				</div>
			</div>
			<!-- /.container-fluid -->
		</div>
	</div>
	</div>
	<!-- End of Main Content -->
