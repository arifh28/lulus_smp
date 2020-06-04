

            <!-- BREADCRUMB-->
            <section class="au-breadcrumb m-t-75">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="au-breadcrumb-content">
                                    <div class="au-breadcrumb-left">                                        
                                        <ul class="list-unstyled list-inline au-breadcrumb__list">
                                            <li class="list-inline-item active">
                                                <a href="<?php echo base_url(); ?>index.php/operator">Dashboard</a>
                                            </li>											
                                            <li class="list-inline-item seprate">
                                                <span>/</span>
                                            </li>
                                            <li class="list-inline-item">Login App dan Pengunjung Web</li>                                            
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

						<!-- END BREADCRUMB-->
						<div class="container-fluid">
						<div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Data Login App</h3>                                
                                <div class="table-responsive table-responsive-data2">
                                    <table id="tables" class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Siswa</th>
												<th>Kelas</th>
                                                <th>IP</th>
                                                <th>Agent</th>
                                                <th>Waktu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php											
											$i = 1; 
											foreach ($login_app as $s){ 											
											?>
												<tr class="tr-shadow">
													<td><?php echo $i++; ?></td>
													<td><?php echo $s->nama; ?></td>
													<td><?php echo $s->kelas; ?></td>
													<td><?php echo $s->ip; ?></td>
													<td><?php echo $s->agent; ?></td>
													<td><?php echo $s->tanggal; ?></td>													
												</tr>												
											<?php } ; ?>			
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
					