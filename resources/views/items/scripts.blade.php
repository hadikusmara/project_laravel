
  
		<script src="{{ asset('asset/js/jquery.min.js') }}"></script>
		<!-- jQuery UI 1.10.3 -->
		<script src="{{ asset('asset/js/jquery-ui-1.10.3.min.js') }}" type="text/javascript"></script>
		<!-- Bootstrap -->
		<script src="{{ asset('asset/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<!-- Morris.js charts -->
		<script src="{{ asset('asset/js/raphael-min.js') }}"></script>
	 
		<script src="{{ asset('asset/js/highcharts.js') }}" type="text/javascript"></script>
		<!-- Sparkline -->
		<script src="{{ asset('asset/js/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
		<!-- jvectormap -->
		<script src="{{ asset('asset/js/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/js/jquery-jvectormap-world-mill-en.js') }}asset/js/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
		<!-- jQuery Knob Chart -->
		<script src="{{ asset('asset/js/jquery.knob.js') }}" type="text/javascript"></script>
		<!-- daterangepicker -->
		<script src="{{ asset('asset/js/daterangepicker.js') }}" type="text/javascript"></script>
		<!-- datepicker -->
		<script src="{{ asset('asset/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
		<!-- Bootstrap WYSIHTML5 -->
		<script src="{{ asset('asset/js/bootstrap3-wysihtml5.all.min.js') }}" type="text/javascript"></script>
		<!-- iCheck -->
		<script src="{{ asset('asset/js/icheck.min.js') }}" type="text/javascript"></script>

		<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
		<script src="{{ asset('asset/js/app.js') }}" type="text/javascript"></script>
		
	 
		<!-- DATA TABES SCRIPT -->
		<script src="{{ asset('asset/js/jquery.dataTables.js') }}" type="text/javascript"></script>
		<script src="{{ asset('asset/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
		
		<!-- AdminLTE for demo purposes -->

		<!-- page script -->
		<!-- CK Editor -->
		<script src="{{ asset('asset/js/ckeditor.js') }}" type="text/javascript"></script>

		<script type="text/javascript">
				$(function() {
						$("#example1").dataTable();
						$('#example2').dataTable({
								"bPaginate": true,
								"bLengthChange": false,
								"bFilter": false,
								"bSort": true,
								"bInfo": true,
								"bAutoWidth": false
						});
				});
		</script>
		<script type="text/javascript">
				$(function() {
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace('editor1');
						//bootstrap WYSIHTML5 - text editor
						$(".textarea").wysihtml5();
				});
		</script>
		<script type="text/javascript">
				$(function() {
						// Replace the <textarea id="editor1"> with a CKEditor
						// instance, using default configuration.
						CKEDITOR.replace('editor1');
						//bootstrap WYSIHTML5 - text editor
						$(".textarea").wysihtml5();
				});
		</script>
		<script type="text/javascript">
			function getLocationConstant() {
					if (navigator.geolocation) {
							navigator.geolocation.getCurrentPosition(onGeoSuccess, onGeoError);
					} else {
							alert("Your browser or device doesn't support Geolocation");
					}
			}

			// If we have a successful location update
			function onGeoSuccess(event) {
					document.getElementById("Latitude").value = event.coords.latitude;
					document.getElementById("Longitude").value = event.coords.longitude;
					document.getElementById("Position1").value = event.coords.latitude + ", " + event.coords.longitude;

			}

			// If something has gone wrong with the geolocation request
			function onGeoError(event) {
					alert("Error code " + event.code + ". " + event.message);
			}
		</script>			
		<script type="text/javascript">
			window.onload = function() { jam(); }
		 
			function jam() {
			 var e = document.getElementById('jam'),
			 d = new Date(), h, m, s;
			 h = d.getHours();
			 m = set(d.getMinutes());
			 s = set(d.getSeconds());
		 
			 e.innerHTML = h +':'+ m +':'+ s;
		 
			 setTimeout('jam()', 1000);
			}
		 
			function set(e) {
			 e = e < 10 ? '0'+ e : e;
			 return e;
			}
   </script>	




<!--
<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ url('assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{ url('assets/scripts/klorofil-common.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{ asset('js/waves.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js')}}"></script>
		-->
<script>
    $(function(){
        $('#preloader').fadeOut('slow');

        

    })

    
</script>
@stack('script')