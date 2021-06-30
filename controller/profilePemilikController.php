<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/pemilik.php";
 session_start();
    class ProfilePemilikController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result=$this->getPemilikData();
            //var_dump($result);
            //var_dump($_SESSION["pemilik"]);
            return View2::createView("profilePemilik.php",["result"=>$result]);
    
        }

        public function getPemilikData(){
            $result=[];
            $idU= $_SESSION["pemilik"]["idPemilik"];
            $query="SELECT * FROM user u INNER JOIN pemilik ps ON u.idU=ps.idU WHERE u.idU='$idU'";
            $query_result = $this->db->executeSelectQuery($query);
            //iterasi cuma bakal sekali
            foreach($query_result as $key => $value){
                $result[]=new Pemilik ($value['idU'],$value['username'],$value['pass'],$value['profile_picture']);
             }
                return $result;
        }
        }
    
   

    
?>