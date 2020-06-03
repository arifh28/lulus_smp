

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
											 Pengaturan
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
                                        <strong>Setting</strong>
                                        <small> Website</small>
                                    </div>
                                    <div class="card-body card-block">
									<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/operator/proses_setting">		
                                        <div class="row form-group">
											<div class="col-md-6">
												<label for="nama_sekolah" class=" form-control-label">Nama Sekolah</label>
												<input type="text" id="nama_sekolah" name="nama_sekolah" value="<?php echo $nama_sekolah; ?>" placeholder="Tuliskan Nama Sekolah" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="tahun_ajaran" class=" form-control-label">Tahun Ajaran</label>
												<input type="text" id="tahun_ajaran" name="tahun_ajaran" value="<?php echo $tahun_ajaran; ?>" placeholder="Tuliskan Tahun Pelajaran" class="form-control">
											</div>											
										</div>
										<div class="row form-group">
											<div class="col-md-12">
												<label for="kop" class=" form-control-label">Kop Sekolah</label>
												<textarea id="editor1" row="2" col="1" id="kop" name="kop" class="form-control"><?php echo $kop; ?></textarea>
											</div>											
										</div>
										<div class="row form-group">
											<div class="col-md-6">
												<label for="nama_kepala_sekolah" class=" form-control-label">Nama Kepala Sekolah</label>
												<input type="text" id="nama_kepala_sekolah" name="nama_kepala_sekolah" value="<?php echo $nama_kepala_sekolah; ?>" placeholder="Tuliskan Nama Kepala Sekolah" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="nbm_kepala_sekolah" class=" form-control-label">NBM/NIP Kepala Sekolah</label>
												<input type="text" id="nbm_kepala_sekolah" name="nbm_kepala_sekolah" value="<?php echo $nbm_kepala_sekolah; ?>" placeholder="Tuliskan NBM/NIP Kepala Sekolah" class="form-control">
											</div>																						
										</div>
										<div class="row form-group">
											<div class="col-md-6">
												<label for="tanggal_rapat" class=" form-control-label">Tanggal Rapat Kelulusan</label>
												<input type="text" id="tanggal_rapat" name="tanggal_rapat" value="<?php echo $tanggal_rapat; ?>" placeholder="Tuliskan Waktu dan Tempat Pengesahan Surat Kelulusan" class="form-control">
											</div>
											<div class="col-md-6">
												<label for="pengesahan" class=" form-control-label">Waktu dan Tempat Pengesahan Surat Kelulusan</label>
												<input type="text" id="pengesahan" name="pengesahan" value="<?php echo $pengesahan; ?>" placeholder="Tuliskan Waktu dan Tempat Pengesahan Surat Kelulusan" class="form-control">
											</div>											
										</div>
										<div class="row form-group">
											<div class="col-md-6">
												<label for="no_surat" class=" form-control-label">No Surat Kelulusan Sekolah</label>
												<input type="text" id="no_surat" name="no_surat" value="<?php echo $no_surat; ?>" class="form-control" />
											</div>
											<div class="col-md-6">
												<label for="waktu_pengumuman" class="form-control-label">Waktu Pengumuman Kelulusan</label>												
												<p><small><?php echo $waktu_pengumuman; ?></p></small>	
												<p id="datepairExample">
													<input type="text" name="pengumuman_tanggal" placeholder="Tanggal Pengumuman" class="form-control date start" />
													<input type="text" name="pengumuman_waktu" placeholder="Tanggal Pengumuman" class="form-control time start" />
												</p>
											</div>											
										</div>
																				
										<button type="submit" class="btn btn-sm btn-success">EDIT DATA</button>
									</form>	
                                    </div>
                                </div>
                            </div>
							<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Setting</strong>
                                        <small> Gambar-gambar</small>
                                    </div>
                                    <div class="card-body card-block">
										<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/operator/proses_setting_logo_sekolah">	
										<div class="row form-group">
											<div class="col-md-2">
												<label for="file-input_logo" class=" form-control-label">Logo Sekolah</label>
											</div>
											<div class="col-md-4">
												<input type="file" id="file-input_logo" name="file-input_logo" class="form-control-file">
											</div>
											<div class="col-md-4">
												<p><small>Upload dengan format gif/jpg/png/jpeg dengan resolusi gambar 3000 x 2000 pixel dan maksimal 2 MB. Direkomendasikan PNG transparent.</small></p>
											</div>
											<div class="col-md-2">
												<img src="<?php echo base_url(); ?>assets/back/images/<?php echo $logo_sekolah; ?>" width="200px">
											</div>
										</div>	
										<button type="submit" class="btn btn-sm btn-success">GANTI LOGO SEKOLAH</button>
										</form>
										<hr>
										<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/operator/proses_setting_ttd_ks">	
										<div class="row form-group">
											<div class="col-md-2">
												<label for="file-input_ttd" class=" form-control-label">Tanda Tangan Kepala Sekolah</label>
											</div>
											<div class="col-md-4">
												<input type="file" id="file-input_ttd" name="file-input_ttd" class="form-control-file">
											</div>
											<div class="col-md-4">
												<p><small>Upload dengan format gif/jpg/png/jpeg dengan resolusi gambar 3000 x 2000 pixel dan maksimal 2 MB. Direkomendasikan PNG transparent.</small></p>
											</div>
											<div class="col-md-2">
												<img src="<?php echo base_url(); ?>assets/back/images/<?php echo $tanda_tangan_ks; ?>" width="200px">
											</div>
										</div>	
										<button type="submit" class="btn btn-sm btn-success">GANTI TANDA TANGAN</button>
										</form>
										<hr>
										<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/operator/proses_setting_stempel">	
										<div class="row form-group">
											<div class="col-md-2">
												<label for="file-input_stempel" class=" form-control-label">Stempel Sekolah</label>
											</div>
											<div class="col-md-4">
												<input type="file" id="file-input_stempel" name="file-input_stempel" class="form-control-file">
											</div>
											<div class="col-md-4">
												<p><small>Upload dengan format gif/jpg/png/jpeg dengan resolusi gambar 3000 x 2000 pixel dan maksimal 2 MB. Direkomendasikan PNG transparent.</small></p>
											</div>
											<div class="col-md-2">
												<img src="<?php echo base_url(); ?>assets/back/images/<?php echo $stempel_sekolah; ?>" width="200px">
											</div>
										</div>	
										<button type="submit" class="btn btn-sm btn-success">GANTI STEMPEL</button>
										</form>
										
									</div>
								</div>
							</div>								
						</div>
                    </div>
				</div>
			</section>	
					
<script>
	CKEDITOR.replace( 'editor1');
</script>