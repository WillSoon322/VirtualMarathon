<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/admin.php";
 session_start();
    class ProfileAdminController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result=$this->getAdminData();
            //var_dump($result);
            return View2::createView("profileAdmin.php",["result"=>$result]);
    
        }
        public function getAdminData(){
            $result=[];
            $idU=$_SESSION["admin"]["idA"];
            $query="SELECT * FROM user u INNER JOIN `admin` ps ON u.idU=ps.idU WHERE u.idU='$idU'";
            $query_result = $this->db->executeSelectQuery($query);
            //iterasi cuma bakal sekali
            foreach($query_result as $key => $value){
                $result[]=new Admin ($value['idU'],$value['username'],$value['pass'],$value['profile_picture']);
             }
                return $result;
        }

       
        }
    
   

    
?>