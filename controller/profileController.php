<?php
require_once "controller/services/mysqlDB.php";
require_once "view/view2.php";
require_once "model/track.php";
require_once "model/progress.php";
require_once "model/user.php";
require_once "model/peserta.php";
session_start();
class profileController
{

    protected $db;

    public function __construct(){
        $this->db = new mySQLDB("localhost", "root", "", "tugasbesar");
    }

        public function viewAll(){
            $result=$this->getUserData();
            //var_dump($result);
            return View2::createView("profile.php",["result"=>$result]);

        }
       public function getUserData(){
            $result=[];
            $temp=[];
            $idU=$_SESSION["peserta"]["idU"];
            $query="SELECT gambarBadge 
                    FROM track t INNER JOIN progress p ON t.idT=p.idT INNER JOIN peserta ps ON p.idU=ps.idU 
                    WHERE ps.idU='$idU' AND persentase=100";
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $temp[] = new track(NULL,NULL,NULL,NULL,NULL,NULL,NULL,$value["gambarBadge"]);
                }
            $result[]=$temp;//0  isinya badge peserta
            $temp=[];

            $query="SELECT tema , persentase FROM track t INNER JOIN progress p ON t.idT=p.idT INNER JOIN peserta ps ON p.idU=ps.idU WHERE ps.idU='$idU'";
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $temp[] = new Progress($value["persentase"],$value["tema"],NULL,NULL,NULL,NULL);
                }
            $result[]=$temp;//1 isinya progress
            
            $dir="view/assets/defaultbg.jpg";//default dp peserta

            if(isset($_SESSION["peserta"]['progress'])){//session[peserta][progress] buat nyimpen peserta TERAKHIR progress dimana
                $gambarBackGround=$_SESSION["peserta"]['progress'];
                $query="SELECT gambar FROM track t WHERE tema='$gambarBackGround'";
                $query_result = $this->db->executeSelectQuery($query);
                $dir=$query_result[0]['gambar'];
            }
            $result[]=$dir;//2 berisi gambar GO

            $query="SELECT * FROM user u INNER JOIN peserta ps ON u.idU=ps.idU WHERE u.idU='$idU'";
            $query_result = $this->db->executeSelectQuery($query);
            //iterasi cuma bakal sekali
            $ooser=[];
            $pesertaa=[];
            foreach($query_result as $key => $value){
                $ooser[] = new User ($value["idU"],$value["username"],$value["pass"],$value["profile_picture"]);
                $pesertaa[] = new Peserta ($value["idU"],$value["no_telepon"],$value["email"],$value["nama"],$value["Gender"],$value["kota"],$value["Alamat"],$value["usia"],$value["saldo"]);
            }
            $result[]=$ooser;//3 berisi user data
            $result[]=$pesertaa;// 4 berisi data peserta
                return $result;
        }


    public function updateData()
    {
        //var_dump($_POST);
        $idU=$_SESSION["peserta"]["idU"];
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
                $_FILES['gambarbaru']['name']=$idU.'.'.$trackFileType;//nama file dijadiin id track
            }
            $oldname1=$_FILES['gambarbaru']['tmp_name'];
            $newName1="view/assets/uploads/users/".$_FILES['gambarbaru']['name'];
            if($sukses===true){
                move_uploaded_file($oldname1,$newName1);
                $query = "UPDATE user SET profile_picture='$newName1' WHERE idU='$idU'";
                $this->db->executeNonSelectQuery($query);
                echo "dp is  succesfully inserted <br>";
             }
             else{
                 echo "dp is not succesfully inserted <br>";
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
    
    
