

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
											 Tambah Siswa
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
							<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Import Excel</strong>
                                        <small> Siswa</small>
                                    </div>
                                    <div class="card-body card-block">
										<p>Import Data Siswa Dari Microsft Excel 2003 (.xls)</p>
										<a class="btn btn-info" href="<?php echo base_url(); ?>index.php/operator/import_siswa">Import</a>
									</div>
								</div>
							</div>		
							<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Tambah</strong>
                                        <small> Siswa</small>
                                    </div>
                                    <div class="card-body card-block">
									<form method="post" action="<?php echo base_url(); ?>index.php/operator/proses_tambah_siswa">		
                                        <div class="row form-group">
											<div class="col-md-6">
												<label for="nama" class=" form-control-label">Nama</label>
												<input type="text" id="nama" name="nama" placeholder="Tuliskan Nama" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="nisn" class=" form-control-label">NISN</label>
												<input type="text" id="nisn" name="nisn" placeholder="Tuliskan NISN" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-md-6">
												<label for="ttl" class=" form-control-label">Tempat Tanggal Lahir</label>
												<input type="text" id="ttl" name="ttl" placeholder="Tuliskan Tempat Tanggal Lahir" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="orang_tua" class=" form-control-label">Nama Orang Tua</label>
												<input type="text" id="orang_tua" name="orang_tua" placeholder="Tuliskan Nama Orang Tua" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-md-4">
												<label for="nis" class=" form-control-label">NIS</label>
												<input type="text" id="nis" name="nis" placeholder="Tuliskan NIS" class="form-control">
											</div>
											<div class="col-md-4">
												<label for="password" class=" form-control-label">Password</label>
												<input type="text" id="password" name="password" placeholder="Tuliskan Password" class="form-control">
											</div>
											<div class="col-md-4">
												<label for="kelas" class=" form-control-label">Kelas</label>
												<input type="text" id="kelas" name="kelas" placeholder="Tuliskan Kelas" class="form-control">
											</div>
										</div>										
										<button type="submit" class="btn btn-sm btn-success">TAMBAH SISWA</button>
									</form>	
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
				</div>
			</section>	
					