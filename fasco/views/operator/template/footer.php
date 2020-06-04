<section>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <?php if ($title = "Pengaturan") { ?>
		<!-- Jquery JS-->
		<script src="<?php echo base_url(); ?>assets/back/vendor/jquery-3.2.1.min.js"></script>	
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/back/vendor/datetimepicker/jquery.timepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/vendor/datetimepicker/jquery.timepicker.css" />
		<script src="<?php echo base_url(); ?>assets/back/vendor/datetimepicker/datepair.js"></script>
		<script src="<?php echo base_url(); ?>assets/back/vendor/datetimepicker/jquery.datepair.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/back/vendor/datetimepicker/bootstrap-datepicker.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/back/vendor/datetimepicker/bootstrap-datepicker.css" />
		<script>
			$('#datepairExample .time').timepicker({
				'showDuration': true,
				'timeFormat': 'H:i:s',
				'step': 15,
				'disableTimeRanges': [
					['00:00:00', '07:00:00'],
					['21:00:00', '24:00:00']
				]
			});

			$('#datepairExample .date').datepicker({
				'format': 'M dd yyyy',
				'autoclose': true
			});

			$('#datepairExample').datepair();
		</script>
		<script src="<?php echo base_url(); ?>assets/back/vendor/datatables/datatables.min.js"></script>	
	<?php  } else { ?>
		<!-- Jquery JS-->
		<script src="<?php echo base_url(); ?>assets/back/vendor/jquery-3.2.1.min.js"></script>
		<!-- jQuery CDN - Slim version (=without AJAX) -->
		<script src="<?php echo base_url(); ?>assets/back/vendor/datatables/datatables.min.js"></script>
	<?php } ; ?>
	
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url(); ?>assets/back/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url(); ?>assets/back/vendor/slick/slick.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/wow/wow.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/animsition/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/select2/select2.min.js">
    </script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/vector-map/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/vector-map/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/back/vendor/vector-map/jquery.vmap.world.js"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url(); ?>assets/back/js/main.js"></script>
	<script>
		$(document).ready( function () {
			$('#tables').DataTable();
		} );
	</script>
					
</body>

</html>
<!-- end document-->
