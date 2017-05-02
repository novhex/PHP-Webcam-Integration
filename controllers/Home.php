<?php


namespace controllers;

use \Core\Controller\Controller;

use \Core\View\View;




class Home extends Controller{

	public function __construct(){
		
		parent::__construct();
	}


	public function index(){

		$data['page_title'] = 'PHP + Webcam Demo ';
		View::show('default',$data);
		
	}

	public function capture(){

		$filename = 'img-'.bin2hex(openssl_random_pseudo_bytes(32)). '.jpg';

		$result = file_put_contents('uploads/'.$filename, file_get_contents('php://input') );

		if (!$result) {
			
			exit();
		}
		
		$url = base_url().'uploads/'.$filename;
		print $url;


	}

	
}
