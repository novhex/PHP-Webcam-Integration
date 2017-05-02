
document.getElementById('camview').innerHTML= webcam.get_html(320, 240);

webcam.set_hook( 'onComplete', 'my_completion_handler' );

function take_snapshot() {
	// take snapshot and upload to server
	document.getElementById('captured_photo').innerHTML = '<h1>Uploading...</h1>';
	webcam.snap();
}

function my_completion_handler(msg) {
	// extract URL out of PHP output
	if (msg.match(/(http\:\/\/\S+)/)) {
		var image_url = RegExp.$1;
		

		document.getElementById('captured_photo').innerHTML = 
			
			'<img src="' + image_url + '">';
		
		// reset camera for another shot
		webcam.reset();
	}
	else alert("PHP Error: " + msg);
}