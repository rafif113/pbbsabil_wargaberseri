    <div class="content-page">
    	<div class="content">
    		<!-- Begin Page Content -->
    		<div class="container-fluid">

    			<!-- Page Heading -->
    			<h1 class="h3 mb-4 text-gray-800">Performa Mahasiswa - Data Kelas Wali</h1>
    			<div class="row">
    				<div class="col-lg-6">
    					<?= $this->session->flashdata('message'); ?>
    				</div>
    			</div>
    			<div class="row">
    				<?php foreach ($dataMaster as $key) : ?>
    					<?php if ($key['id'] != 10) : ?>
    						<div class="card mb-3 mr-3" style="width: 18rem;">
    							<div class="card-body">
    								<h5 class="card-title"><?= $key['title'] ?></h5>
    								<a href="<?= base_url("admin/$key[url]") ?>" class="card-link">Detail</a>
    							</div>
    						</div>
    					<?php endif ?>
    				<?php endforeach ?>
    			</div>

    		</div>
    		<!-- /.container-fluid -->
    	</div>
    </div>
    </div>
    <!-- End of Main Content -->
