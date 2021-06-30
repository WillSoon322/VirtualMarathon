<?php
require_once "controller/services/mysqlDB.php";
require_once "controller/view/view.php";

class AddTrackController
{

    protected $db;

    public function __construct()
    {
        $this->db = new mySQLDB("localhost", "root", "", "tugasbesar");
    }

    public function viewAll()
    {
        return View::createView("addTrack.php", []);
    }

    public function addTrack()
    {

      
        //var_dump($_POST);
        $name = $_POST['name'];
        $harga = $_POST['harga'];
        $region = $_POST['region'];
        $jarak = $_POST['jarak'];

        $query = "SELECT count(idT) FROM track";//untuk dapet id baru
        $result=$this->db->executeSelectQuery($query);
        $idT=1+$result[0]['count(idT)'];

        $sukses=true;
        if($_FILES['gambarTrack']['name']!==""){
            $trackFileType = strtolower(pathinfo($_FILES['gambarTrack']['name'], PATHINFO_EXTENSION));
            if($trackFileType!="jpg"&&$trackFileType!="png"&&$trackFileType!="jpeg"){
                echo "track file type incorect, insert jpg, jpeg or png <br> current file type: $trackFileType"   ;
                $sukses=false;
            }
            else{
                $_FILES['gambarTrack']['name']=$idT.'.'.$trackFileType;//nama file dijadiin id track
            }

            $oldname1=$_FILES['gambarTrack']['tmp_name'];
            $newName1="view/assets/uploads/tracks/".$_FILES['gambarTrack']['name'];// harusnya jadi view/assets/uploads/tracks/1.jpg
            
           //echo "success";
        }
         else{
             echo "please insert an image for track<br>";
             $sukses=false;
         }

        //medal
        if($_FILES['gambarMedali']['name']!==""){
            $medalFileType = strtolower(pathinfo($_FILES['gambarMedali']['name'], PATHINFO_EXTENSION));
            if($medalFileType!="jpg"&&$medalFileType!="png"&&$medalFileType!="jpeg"){
                echo "medal file type incorect, insert jpg, jpeg or png <br> current file type: $medalFileType<br>"   ;
                $sukses=false;
            }
            else{
                $_FILES['gambarMedali']['name']=$idT.'.'.$trackFileType;//nama file dijadiin id track
            }

            $oldname2=$_FILES['gambarMedali']['tmp_name'];
            $newName2="view/assets/uploads/medals/".$_FILES['gambarTrack']['name'];// harusnya jadi view/assets/uploads/tracks/1.jpg
        }
         else{
             echo "please insert an image for medal<br>";
             $sukses=false;
         }

        //badge
        if($_FILES['gambarBadge']['name']!==""){
            $badgeFileType = strtolower(pathinfo($_FILES['gambarBadge']['name'], PATHINFO_EXTENSION));
            if($badgeFileType!="jpg"&&$badgeFileType!="png"&&$badgeFileType!="jpeg"){
                echo "badge file type incorect, insert jpg, jpeg or png <br> current file type: $badgeFileType<br>"   ;
                $sukses=false;
            }
            else{
                $_FILES['gambarBadge']['name']=$idT.'.'.$badgeFileType;//nama file dijadiin id track
            }

            $oldname3=$_FILES['gambarBadge']['tmp_name'];
            $newName3="view/assets/uploads/badges/".$_FILES['gambarBadge']['name'];// harusnya jadi view/assets/uploads/tracks/1.jpg
        }
         else{
             echo "please insert an image for badge<br>";
             $sukses=false;
         }

         if (
            isset($name) && $name != ""
            &&
            isset($harga) && $harga != ""
            &&
            isset($region) && $region != ""
            &&
            isset($jarak) && $jarak != ""
        ) {


            $name = $this->db->escapeString($name);
            $harga = $this->db->escapeString($harga);
            $region = $this->db->escapeString($region);
            $jarak = $this->db->escapeString($jarak);
      
        }
        else{
            echo "please enter track data <br>";
            $sukses=false;
        }

         if($sukses===true){
            move_uploaded_file($oldname1,$newName1);
            move_uploaded_file($oldname2,$newName2);
            move_uploaded_file($oldname3,$newName3);
            $query = "INSERT INTO track 
                    VALUES (NULL,'$harga', '$newName1','$jarak','$name','$region','$newName2','$newName3')";
            $this->db->executeNonSelectQuery($query);
            echo "track is  succesfully inserted <br>";
         }
         else{
             echo "track is not succesfully inserted <br>";
         }
         
        
        
    }
}
