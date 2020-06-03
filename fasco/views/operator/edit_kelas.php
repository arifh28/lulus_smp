

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
											 <a href="<?php echo base_url(); ?>index.php/operator/kelas">Kelas</a>
											</li>
											<li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
											<li class="list-inline-item">
											 <?php echo $nama_kelas; ?>
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
                                        <small> Kelas</small>
                                    </div>
                                    <div class="card-body card-block">
									<form method="post" action="<?php echo base_url(); ?>index.php/operator/proses_edit_kelas/<?php echo $id_kelas; ?>">		
                                        <div class="row form-group">
											<div class="col-md-12">
												<label for="kelas" class=" form-control-label">Nama Kelas</label>
												<input type="text" id="kelas" name="kelas" value="<?php echo $nama_kelas; ?>" placeholder="Tuliskan Nama" class="form-control">
											</div>											
										</div>																				
										<button type="submit" class="btn btn-sm btn-success">EDIT KELAS</button>
									</form>	
                                    </div>
                                </div>
                            </div>
						</div>
                    </div>
				</div>
			</section>	
					