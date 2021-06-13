<?php
 require_once "controller/services/mysqlDB.php";
// require_once "model/book.php";
 require_once "view/view.php";

    class landingController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","library");
        }

        public function viewAll(){
            return View::createView("landing.php",[
                
            ]);
    
        }

       
        }
    
   

    
?>
