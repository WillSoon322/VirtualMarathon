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
			case $baseURL.'/changeTrack':
				require_once "controller/changeTrackController.php";
				$landCtrl = new ChangeTrackController();
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
			case $baseURL.'/addTrack':
				require_once "controller/addTrackController.php";
				$pemilikCtrl = new AddTrackController();
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
			case $baseURL.'/profilePemilik':
				require_once "controller/profilePemilikController.php";
				$ppCtrl = new ProfilePemilikController();
				echo $ppCtrl -> viewAll();//echo hasil FINAL
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
			case $baseURL.'/loginPemilik':
				require_once "controller/loginPemilikController.php";
				$lpCtrl = new LoginPemilikController();
				echo $lpCtrl -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/statusPeserta':
				require_once "controller/statusPesertaController.php";
				$stsPeserta = new statusPesertaController();
				echo $stsPeserta -> viewAll();//echo hasil FINAL
			break;
			case $baseURL.'/laporan':
				require_once "controller/laporanController.php";
				$l = new LaporanController();
				//echo $l -> getLaporan();//echo hasil FINAL
				echo $l -> viewAll();
			break;
			case $baseURL.'/setting':
				require_once "controller/settingController.php";
				$l = new settingController();
				echo $l -> viewAll();
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
			   break;
			 case $baseURL.'/addTrack':
				require_once "controller/addTrackController.php";
				$signupCtrl = new AddTrackController();
				echo $signupCtrl -> addTrack();//echo hasil FINAL
				header('location: addTrack');
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
				header("location: profile");
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
			case $baseURL.'/loginPemilik':
				require_once "controller/loginPemilikController.php";
				$laCtrl = new LoginPemilikController();
				echo $laCtrl -> loginPemilik();//echo hasil FINAL
				//header("location: profilePemilik");
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
				header("location: validasi");
			break;
			case $baseURL.'/changeTrack':
				require_once "controller/changeTrackController.php";
				$landCtrl = new ChangeTrackController();
				echo $landCtrl -> changeTrack();//echo hasil FINAL
			break;
			case $baseURL.'/tracks':
				require_once "controller/tracksController.php";
				$tracks = new tracksController();
				echo $tracks -> viewFilter();//echo hasil FINAL
			break;
				default:
				echo "404 not found";
				break;
		}
		
	}
