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
			case $baseURL.'/pemilik':
				require_once "controller/pemilikController.php";
				$pemilikCtrl = new PemilikController();
				echo $pemilikCtrl -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/addAdmin':
				require_once "controller/addAdminController.php";
				$pemilikCtrl = new addAdminController();
				echo $pemilikCtrl -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/tracks':
				require_once "controller/tracksController.php";
				$tracks = new tracksController();
				echo $tracks -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/profile':
				require_once "controller/profileController.php";
				$profile = new profileController();
				echo $profile -> viewAll();//echo hasil FINAL
			break;
			default:
				echo "404 not found";
				break;
		}
	}
	else if($_SERVER["REQUEST_METHOD"]=="POST"){
		switch ($url){
			case $baseURL.'/signup':
				require_once "controller/signupController.php";
				$signupCtrl = new SignupController();
				echo $signupCtrl -> addUser();//echo hasil FINAL
				header('location: landing');
			   break;
			 case $baseURL.'/pemilik':
				require_once "controller/pemilikController.php";
				$signupCtrl = new PemilikController();
				echo $signupCtrl -> addTrack();//echo hasil FINAL
				header('location: pemilik');
				break;
			case $baseURL.'/addAdmin':
				require_once "controller/addAdminController.php";
				$pemilikCtrl = new addAdminController();
				echo $pemilikCtrl -> addAdmin();//echo hasil FINAL
				header('location: addAdmin');
				break;
			case $baseURL.'/login':
				require_once "controller/login_controller.php";
				$loginCtrl = new LoginController();
				echo $loginCtrl -> logIn();//echo hasil FINAL
			   break;
			default:
				echo "404 not found";
				break;
		}
		
	}
?>

