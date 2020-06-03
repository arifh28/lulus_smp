

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
											 <a href="<?php echo base_url(); ?>index.php/operator/nilai siswa">Nilai Siswa</a>
											</li>
											<li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
											<li class="list-inline-item">
											 Import Excel Nilai Siswa
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
                                        <small> Nilai Siswa</small>
                                    </div>
                                    <div class="card-body card-block">
										<div class="row">
										<div class="col-lg-8">
											<p><small>Pastikan file yang diupload berbentuk file .xls (2003) atau .xlsx (2007)</small></p>
											<?php echo $this->session->flashdata('notif') ?>
											<form method="POST" action="<?php echo base_url() ?>index.php/operator/upload_nilai_siswa" enctype="multipart/form-data">
											  <div class="form-group">
												<label for="exampleInputEmail1">UNGGAH FILE EXCEL</label>
												<input type="file" name="userfile" class="form-control">
											  </div>

											  <button type="submit" class="btn btn-sm btn-success"><i class="fas fa-upload"></i> UPLOAD</button>
											</form>
										</div>
										<div class="col-lg-4">
											<p><small>Download file format excel untuk Import Data Nilai Siswa</small></p>
											<a href="<?php echo base_url(); ?>assets/back/media/nilai_siswa_lulus.xlsx" class="btn btn-sm btn-info"><i class="fas fa-download"></i> DOWNLOAD FORMAT</a>
										</div>
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
				</div>
			</section>	
					