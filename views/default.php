<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/app.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.css';?>">

	<title><?php echo $page_title; ?></title>

</head>
<body>

		

		<div class="container">
		<h1 class="text-center">PHP + Webcam Demo</h1>
		<hr>
		<p class="text-center" style="color:red;">Please  allow if Adobe Flash Player wants to access your camera in order to take a photo.</p>
			<br>
			<div class="row">

			<div class="col-md-12 text-center">
				<div class="col-md-6">
					<label> Camera View </label>
					<div id="camview"></div>
					<button style="margin-top: 10px;" class="btn btn-primary btn-sm" onClick="take_snapshot()"><i class="fa fa-camera"></i> Take a photo</button>
				</div>

				<div class="col-md-6">
					<label> Captured Image </label>
					<div id="captured_photo"></div>
				</div>
			</div>

			</div>
		</div>
		

		
	<script type="text/javascript" src="<?php echo base_url()."assets/webcam.js";?>"></script>

	<script language="javascript">
		webcam.set_api_url("<?php echo base_url().'capture';?>");
		webcam.set_quality( 100 ); // JPEG quality (1 - 100)
		webcam.set_shutter_sound( true ); 
	</script>

	<script language="javascript" src="<?php echo base_url()."assets/script.js";?>"></script>



	</body>
</html>