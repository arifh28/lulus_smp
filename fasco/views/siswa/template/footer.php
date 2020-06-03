</div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="<?php echo base_url(); ?>assets/siswa/js/jquery.min.js"></script>
	
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
   <script src="<?php echo base_url(); ?>assets/siswa/js/bootstrap.min.js"></script>
	
	<script>
	// Set the date we're counting down to
	var countDownDate = new Date("<?php echo $waktu_pengumuman; ?>").getTime();

	// Update the count down every 1 second
	var countdownfunction = setInterval(function() {

	  // Get todays date and time
	  var now = new Date().getTime();
	  
	  // Find the distance between now an the count down date
	  var distance = countDownDate - now;
	  
	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
	  
	  // Output the result in an element with id="demo"
	  document.getElementById("demo").innerHTML = "<small>Pengumuman Belum Mulai silahkan kembali dalam </small><br> " + days + " hari, " + hours + " jam, "
	  + minutes + " menit, " + seconds + " detik lagi.";
	  
	  // If the count down is over, write some text 
	  if (distance < 0) {
		clearInterval(countdownfunction);
		document.getElementById("demo").innerHTML = "<p>SUDAH DIUMUMKAN, SILAHKAN KLIK DIBAWAH INI.</p><a href='<?php echo base_url(); ?>index.php/siswa/lihat_pengumuman' class='btn btn-sm btn-info'><i class='fas fa-download'></i> LIHAT PENGUMUMAN</a>";
	  }
	}, 1000);
	</script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
	
	
</body>

</html>