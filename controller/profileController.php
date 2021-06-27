<?php
require_once "controller/services/mysqlDB.php";
require_once "view/view2.php";
require_once "model/track.php";
session_start();
class profileController
{

    protected $db;

    public function __construct(){
        $this->db = new mySQLDB("localhost", "root", "", "tugasbesar");
    }

        public function viewAll(){
            $result=$this->getBadges();
            return View2::createView("profile.php",["result"=>$result]);

        }
       public function getBadges(){
            $result=[];
            $temp=[];
            $idU=$_SESSION["idU"];
            $query="SELECT gambarBadge FROM track t INNER JOIN progress p ON t.idT=p.idT INNER JOIN peserta ps ON p.idU=ps.idU WHERE ps.idU='$idU' AND persentase=100";
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $temp[] = new track(NULL,NULL,NULL,NULL,NULL,NULL,NULL,$value["gambarBadge"]);
                }
            $result[]=$temp;//0
            $temp=[];

            $query="SELECT tema FROM track t INNER JOIN progress p ON t.idT=p.idT INNER JOIN peserta ps ON p.idU=ps.idU WHERE ps.idU='$idU'";
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $temp[] = new track(NULL,NULL,NULL,NULL,$value["tema"],NULL,NULL,NULL);
                }
            $result[]=$temp;//1
            
            $dir="view/assets/defaultbg.jpg";//besok cari default nya
           
            if(isset($_SESSION['progress'])){
                $gambarBackGround=$_SESSION['progress'];
                $query="SELECT gambar FROM track t WHERE tema='$gambarBackGround'";
                $query_result = $this->db->executeSelectQuery($query);
                $dir=$query_result[0]['gambar'];
            }
            $result[]=$dir;//2
                return $result;
            }


    public function updateData()
    {
        //var_dump($_POST);
        $idU=$_SESSION["idU"];
        //echo$idU;
        
        if(isset($_POST["namabaru"] )&& $_POST["namabaru"]!=""){
            $name = $this->db->escapeString($_POST["namabaru"]);
            //echo $name;
            $query="UPDATE peserta SET nama='$name' WHERE idU='$idU'";
            $query_result = $this->db->executeNonSelectQuery($query);
        }
        if(isset($_POST["passwordbaru"]) && $_POST["passwordbaru"]!=""){
            $pass = $this->db->escapeString($_POST["passwordbaru"]);
            $query="UPDATE user SET pass='$pass' WHERE idU='$idU'";
            $query_result = $this->db->executeNonSelectQuery($query);
        }

        if($_FILES['gambarbaru']['name']!==""){
            $sukses=true;
            $trackFileType = strtolower(pathinfo($_FILES['gambarbaru']['name'], PATHINFO_EXTENSION));
            if($trackFileType!="jpg"&&$trackFileType!="png"&&$trackFileType!="jpeg"){
                echo "track file type incorect, insert jpg, jpeg or png <br> current file type: $trackFileType"   ;
                $sukses=false;
            }
            else{
            //echo $trackFileType;  
            // echo =$_FILES['gambarTrack']['name'];
            // echo "<br>";
                $_FILES['gambarbaru']['name']=$idU.'.'.$trackFileType;//nama file dijadiin id track
            //echo $_FILES['gambarTrack']['name'];
            //echo "<br>";
            }
            $oldname1=$_FILES['gambarbaru']['tmp_name'];
            $newName1="view/assets/uploads/users/".$_FILES['gambarbaru']['name'];
            if($sukses===true){
                move_uploaded_file($oldname1,$newName1);
                $query = "UPDATE user SET profile_picture='$newName1' WHERE idU='$idU'";
                $this->db->executeNonSelectQuery($query);
                echo "track is  succesfully inserted <br>";
             }
             else{
                 echo "track is not succesfully inserted <br>";
             }
    }

    if(isset($_POST["alamatbaru"]) && $_POST["alamatbaru"]!=""){
        $alamat = $this->db->escapeString($_POST["alamatbaru"]);
        $query="UPDATE peserta SET alamat='$alamat' WHERE idU='$idU'";
        $query_result = $this->db->executeNonSelectQuery($query);
    }
}
      }      // $result[] = $temp;
        // return $result;
    
    
