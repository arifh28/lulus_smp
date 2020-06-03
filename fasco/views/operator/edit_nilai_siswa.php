

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
											 <a href="<?php echo base_url(); ?>index.php/operator/nilai_siswa">NIlai Siswa</a>
											</li>
											<li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
											<li class="list-inline-item">
											 Edit Nilai <?php echo $nama; ?>
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
                                        <small> Nilai Siswa</small>
                                    </div>
                                    <div class="card-body card-block">
									<form method="post" action="<?php echo base_url(); ?>index.php/operator/proses_edit_nilai_siswa/<?php echo $nisn; ?>">		
                                        <div class="row form-group">
											<div class="col-md-3">
												<label for="mtk" class=" form-control-label">Matematika</label>
												<input type="text" id="mtk" name="mtk" value="<?php echo $mtk; ?>" placeholder="Tuliskan Nilai Matematika" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="bhs_inggris" class=" form-control-label">Bahasa Inggris</label>
												<input type="text" id="bhs_ingg" name="bhs_inggris" value="<?php echo $bhs_inggris; ?>" placeholder="Tuliskan Nilai Bahasa Inggris" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="bhs_indo" class=" form-control-label">Bahasa Indonesia</label>
												<input type="text" id="bhs_indo" name="bhs_indo" value="<?php echo $bhs_indo; ?>" placeholder="Tuliskan Nilai Bahasa Indonesia" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="ipa" class=" form-control-label">IPA</label>
												<input type="text" id="ipa" name="ipa" value="<?php echo $ipa; ?>" placeholder="Tuliskan Nilai IPA" class="form-control">
											</div>
										</div>	
										<div class="row form-group">
											<div class="col-md-3">
												<label for="ips" class=" form-control-label">IPS</label>
												<input type="text" id="ips" name="ips" value="<?php echo $ips; ?>" placeholder="Tuliskan Nilai IPS" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="pai" class=" form-control-label">PAI dan Budi Pekerti</label>
												<input type="text" id="pai" name="pai" value="<?php echo $pai; ?>" placeholder="Tuliskan Nilai PAI dan Budi Pekerti" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="seni" class=" form-control-label">Seni Budaya</label>
												<input type="text" id="seni" name="seni" value="<?php echo $seni; ?>" placeholder="Tuliskan Nilai Seni Budaya" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="ppkn" class=" form-control-label">PPKn</label>
												<input type="text" id="ppkn" name="ppkn" value="<?php echo $ppkn; ?>" placeholder="Tuliskan Nilai PPKn" class="form-control">
											</div>
										</div>
										<div class="row form-group">
											<div class="col-md-3">
												<label for="prakarya" class=" form-control-label">Prakarya</label>
												<input type="text" id="prakarya" name="prakarya" value="<?php echo $prakarya; ?>" placeholder="Tuliskan Nilai Prakarya" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="penjasorkes" class=" form-control-label">Penjasorkes</label>
												<input type="text" id="penjasorkes" name="penjasorkes" value="<?php echo $penjasorkes; ?>" placeholder="Tuliskan Nilai Penjasorkes" class="form-control">
											</div>
											<div class="col-md-3">
												<label for="bhs_jawa" class=" form-control-label">Bahasa Jawa</label>
												<input type="text" id="bhs_jawa" name="bhs_jawa" value="<?php echo $bhs_jawa; ?>" placeholder="Tuliskan Nilai Bahasa Jawa" class="form-control">
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
					