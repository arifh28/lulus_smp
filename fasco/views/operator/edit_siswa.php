

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">                                        
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item">
                                                <a href="<?php echo base_url(); ?>index.php/operator">Dashboard</a>
                                            </li>											
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">
											 <a href="<?php echo base_url(); ?>index.php/operator/siswa">Siswa</a>
											</li>
											<li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
											<li class="list-inline-item">
											 <?php echo $nama; ?>
											</li>
                                        </ul>										
                                    </div>
									<button class="au-btn au-btn-icon au-btn--green">
                                        <?php echo $title; ?></button>	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

			<!-- STATISTIC-->
            <section class="statistic">
                <div class="section__content section__content--p30">

						<!-- END BREADCRUMB-->
						<div class="container-fluid">
						<div class="row">
							<br>
							<br>
							<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Edit</strong>
                                        <small> Siswa</small>
                                    </div>
                                    <div class="card-body card-block">
									<form method="post" action="<?php echo base_url(); ?>index.php/operator/proses_edit_siswa/<?php echo $id_siswa; ?>">		
                                        <div class="row form-group">
											<div class="col-md-6">
												<label for="nama" class=" form-control-label">Nama</label>
												<input type="text" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Tuliskan Nama" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="nisn" class=" form-control-label">NISN</label>
												<input type="text" id="nisn" name="nisn" value="<?php echo $nisn; ?>" placeholder="Tuliskan NISN" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-md-6">
												<label for="ttl" class=" form-control-label">Tempat Tanggal Lahir</label>
												<input type="text" id="ttl" name="ttl" value="<?php echo $ttl; ?>" placeholder="Tuliskan Tempat Tanggal Lahir" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="orang_tua" class=" form-control-label">Nama Orang Tua</label>
												<input type="text" id="orang_tua" name="orang_tua" value="<?php echo $orang_tua; ?>" placeholder="Tuliskan Nama Orang Tua" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-md-4">
												<label for="nis" class=" form-control-label">NIS</label>
												<input type="text" id="nis" name="nis" value="<?php echo $nis; ?>" placeholder="Tuliskan NIS" class="form-control">
											</div>
											<div class="col-md-4">
												<label for="password" class=" form-control-label">Password</label>
												<input type="text" id="password" name="password" value="<?php echo $password; ?>" placeholder="Tuliskan Password" class="form-control">
											</div>
											<div class="col-md-4">
												<label for="kelas" class=" form-control-label">Kelas</label>
												<input type="text" id="kelas" name="kelas" value="<?php echo $kelas; ?>" placeholder="Tuliskan Kelas" class="form-control">
											</div>
										</div>										
										<button type="submit" class="btn btn-sm btn-success">EDIT DATA</button>
									</form>	
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
				</div>
			</section>	
					