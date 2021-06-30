<?php
require_once "controller/view/view2.php";
    class AboutUsController{
        
        
        public function viewAll(){
            return View2::createView("aboutus.php",[]);
    
        }
       
        }
    
       
?>
