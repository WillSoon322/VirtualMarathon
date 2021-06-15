<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL='/VirtualMarathon';

	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url) {
			case $baseURL.'/landing':
				require_once "controller/landingController.php";
				$landCtrl = new landingController();
				echo $landCtrl -> viewAll();//echo hasil FINAL
			   break;
			case $baseURL.'/login':
				require_once "controller/login_controller.php";
				$loginCtrl = new LoginController();
				echo $loginCtrl -> viewAll();//echo hasil FINAL
			   break;
			case $baseURL.'/signup':
				require_once "controller/signupController.php";
				$signupCtrl = new SignupController();
				echo $signupCtrl -> viewAll();//echo hasil FINAL
			   break;
			default:
				echo "404 not found";
				break;
		}
	}
	else if($_SERVER["REQUEST_METHOD"]=="POST"){
		switch($url){
			case $baseURL.'/signup':
				require_once "controller/signupController.php";
				$signupCtrl = new SignupController();
				echo $signupCtrl -> addUser();//echo hasil FINAL
			   break;
		}
		
	}
?>

