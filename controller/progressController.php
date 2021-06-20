<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";

    class progressController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            return View2::createView("progress.php",[]);
    
        }

       
        }
    
   

    
?>