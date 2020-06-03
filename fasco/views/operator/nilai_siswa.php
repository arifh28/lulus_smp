

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
                                            <li class="list-inline-item">Nilai Siswa</li>                                            
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

					<?php if($this->session->flashdata('edit')): ?>
						 <?php if($this->session->flashdata('edit') == TRUE): ?>
							  <div class="alert alert-success">Berhasil update data siswa</div>
						 <?php elseif($this->session->flashdata('edit') == FALSE): ?>
							  <div class="alert alert-danger">Gagal update data siswa</div>
						 <?php endif; ?>
					<?php endif; ?>
					
					<?php if($this->session->flashdata('hapus')): ?>
						 <?php if($this->session->flashdata('hapus') == TRUE): ?>
							  <div class="alert alert-success">Berhasil menghapus data siswa</div>
						 <?php elseif($this->session->flashdata('hapus') == FALSE): ?>
							  <div class="alert alert-danger">Gagal menghapus data siswa</div>
						 <?php endif; ?>
					<?php endif; ?>
					
					<?php if($this->session->flashdata('tambah')): ?>
						 <?php if($this->session->flashdata('tambah') == TRUE): ?>
							  <div class="alert alert-success">Berhasil menambahkan siswa baru</div>
						 <?php elseif($this->session->flashdata('tambah') == FALSE): ?>
							  <div class="alert alert-danger">Gagal menambahkan siswa baru</div>
						 <?php endif; ?>
					<?php endif; ?>

						<!-- END BREADCRUMB-->
						<div class="container-fluid">
						<div class="row">
                            <div class="col-md-12">
                                <h3 class="title-5 m-b-35">Data Nilai Siswa</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="<?php echo base_url(); ?>index.php/operator/tambah_nilai_siswa">
										<button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>tambah nilai siswa</button></a>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Excel</option>
                                                <option value="">PDF</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Kelas</th>
                                                <th>Matematika</th>
                                                <th>Bahasa Indonesia</th>
                                                <th>Bahasa Inggris</th>
												<th>IPA</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
											<?php 
											
											$i = 1; 
											foreach ($nilai_siswa as $ns){ 
											
											?>
												<tr class="tr-shadow">
													<td>
														<label class="au-checkbox">
															<input type="checkbox">
															<span class="au-checkmark"></span>
														</label>
													</td>
													<td><?php echo $i++; ?></td>
													<td><?php echo $ns->nama; ?></td>
													<td><?php echo $ns->kelas; ?></td>
													<td><?php echo $ns->mtk; ?></td>
													<td><?php echo $ns->bhs_indo; ?></td>
													<td><?php echo $ns->bhs_inggris; ?></td>
													<td><?php echo $ns->ipa; ?></td>
													<td>
														<div class="table-data-feature">
															
															<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
																<a href="<?php echo base_url(); ?>index.php/operator/edit_nilai_siswa/<?php echo $ns->nisn; ?>"> <i class="zmdi zmdi-edit"></i></a>
															</button>
															<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
																<a href="<?php echo base_url(); ?>index.php/operator/proses_hapus_nilai_siswa/<?php echo $ns->nisn; ?>"><i class="zmdi zmdi-delete"></i></a>
															</button>
															
														</div>
													</td>
												</tr>
												<tr class="spacer"></tr>
											<?php } ; ?>			
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
					