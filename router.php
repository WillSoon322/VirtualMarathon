<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL='/VirtualMarathon';

	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url) {
			case $baseURL:
				require_once "controller/landingController.php";
				$landCtrl = new landingController();
				echo $landCtrl -> view_index();//echo hasil FINAL
			   break;
			default:
				echo "404 not found";
				break;
		}
	}
?>

