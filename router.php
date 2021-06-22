<?php
$url = $_SERVER['REDIRECT_URL'];
$baseURL = '/VirtualMarathon';

	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url) {
			case $baseURL.'/landing':
				require_once "controller/landingController.php";
				$landCtrl = new landingController();
				echo $landCtrl -> viewAll();//echo hasil FINAL
			   break;
			case $baseURL.'/aboutus':
				require_once "controller/aboutUsController.php";
				$abtCtrl = new AboutUsController();
				echo $abtCtrl -> viewAll();//echo hasil FINAL
			   break;
			case $baseURL.'/logout':
				require_once "controller/landingController.php";
				$landCtrl = new landingController();
				echo $landCtrl -> logOut();//echo hasil FINAL
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
			case $baseURL.'/profileAdmin':
				require_once "controller/profileAdminController.php";
				$laCtrl = new ProfileAdminController();
				echo $laCtrl -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/trackpage':
				require_once "controller/trackpagecontroller.php";
				$profile = new trackpageController();
				echo $profile -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/progress':
				require_once "controller/progressController.php";
				$profile = new ProgressController();
				echo $profile -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/buyTrack':
				require_once "controller/buyTrackController.php";
				$bCtrl = new BuyTrackController();
				echo $bCtrl -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/payController':
				require_once "controller/payController.php";
				$pCtrl = new PayController();
				echo $pCtrl -> pay();//echo hasil FINAL
				header("location: tracks");
			break;
			case $baseURL.'/topUp':
				require_once "controller/topupController.php";
				$tCtrl = new TopUpController();
				echo $tCtrl -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/validasi':
				require_once "controller/validasiController.php";
				$vCtrl = new ValidasiController();
				echo $vCtrl -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/loginAdmin':
				require_once "controller/loginAdminController.php";
				$laCtrl = new LoginAdminController();
				echo $laCtrl -> viewAll();//echo hasil FINAL
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
			case $baseURL.'/progress':
				require_once "controller/progressController.php";
				$progCtrl = new ProgressController();
				echo $progCtrl -> addProgress();//echo hasil FINAL
				header("location: progress");
			case $baseURL.'/trackpage':
				require_once "controller/trackpagecontroller.php";
				$trackPageCtrl = new trackpageController();
				echo $trackPageCtrl -> viewAll();//echo hasil FINAL	
			break;
			case $baseURL.'/loginAdmin':
				require_once "controller/loginAdminController.php";
				$laCtrl = new LoginAdminController();
				echo $laCtrl -> loginAdmin();//echo hasil FINAL
			break;
			case $baseURL.'/topup':
				require_once "controller/topupController.php";
				$trackPageCtrl = new TopUpController();
				echo $trackPageCtrl -> topUp();//echo hasil FINAL	
				header("location: profile")	;
				break;
			case $baseURL.'/validasi':
				require_once "controller/validasiController.php";
				$trackPageCtrl = new ValidasiController();
				echo $trackPageCtrl -> validate();//echo hasil FINAL	
				//header("location: validasi")	;
				break;
				default:
				echo "404 not found";
				break;
		}
		
	}
