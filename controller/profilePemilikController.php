<?php
 require_once "controller/services/mysqlDB.php";
 require_once "controller/view/view2.php";
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
        

        public function changeDP(){
            $idU=$_SESSION["pemilik"]["idPemilik"];
            if($_FILES['dpPemilik']['name']!==""){
                $trackFileType = strtolower(pathinfo($_FILES['dpPemilik']['name'], PATHINFO_EXTENSION));
                if($trackFileType!="jpg"&&$trackFileType!="png"&&$trackFileType!="jpeg"){
                    echo "image file type incorect, insert jpg, jpeg or png <br> current file type: $trackFileType"   ;
                    $sukses=false;
                }
                else{
                    $_FILES['dpPemilik']['name']=$idU.'.'.$trackFileType;//nama file dijadiin id track
                }
    
                $oldname1=$_FILES['dpPemilik']['tmp_name'];
                $newName1="view/assets/uploads/users/".$_FILES['dpPemilik']['name'];
                move_uploaded_file($oldname1,$newName1);
                $query="UPDATE user SET profile_picture='$newName1' WHERE idU='$idU'";
                $query_result=$this->db->executeSelectQuery($query);

               //echo "success";
            }
             else{
                 echo "please insert an image for profile picture<br>";
                 
             }
        }
        }
    
   

    
?>