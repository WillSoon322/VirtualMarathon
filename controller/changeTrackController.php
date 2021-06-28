<?php
require_once "controller/services/mysqlDB.php";
require_once "view/view2.php";
require_once "model/track.php";
session_start();
class ChangeTrackController
{

    protected $db;

    public function __construct()
    {
        $this->db = new mySQLDB("localhost", "root", "", "tugasbesar");
    }

    public function viewAll()
    {
        $result = $this->getData();
        return View2::createView("changeTrack.php", ["result" => $result]);
    }

    public function getData()
    {
        $query = "SELECT * FROM track t";
        $query_result = $this->db->executeSelectQuery($query);
        $temp = [];
        foreach ($query_result as $key => $value) {
            $temp[] = new Track(
                $value["idT"],
                $value["harga"],
                // $value["gambar"],
                null,
                $value["jarak"],
                $value["tema"],
                $value["region"],
                $value["gambarMedali"],
                $value["gambarBadge"]
            );
        }
        $result = $temp;
        return $result;
    }

    public function changeTrack()
    {
        if ($_POST['track'] != 'default') {
            $tempId = (int)$_POST['track'];
            if (isset($_POST['trackbaru']) and $_POST['trackbaru'] != "") { //nama

                $tempNama = $_POST['trackbaru'];
                $query = "UPDATE track SET tema = '$tempNama' WHERE track.idT=$tempId";
                $this->db->executeNonSelectQuery($query);
            } else {
                echo "ga";
            }
            if (isset($_POST['harga']) and $_POST['harga'] != "") { //harga

                $tempValue = $_POST['harga'];
                $query = "UPDATE track SET harga = $tempValue WHERE track.idT=$tempId";
                $this->db->executeNonSelectQuery($query);
            } else {
                echo "ga";
            }
            if (isset($_POST['region']) and $_POST['region'] != "") { //region

                $tempValue = $_POST['region'];
                $query = "UPDATE track SET region = '$tempValue' WHERE track.idT=$tempId";
                $this->db->executeNonSelectQuery($query);
            } else {
                echo "ga";
            }
            //TRACKS
            if ($_FILES['gambarTrack']['name'] !== "") {
                //$sukses=true;
                $trackFileType = strtolower(pathinfo($_FILES['gambarTrack']['name'], PATHINFO_EXTENSION));
                if ($trackFileType != "jpg" && $trackFileType != "png" && $trackFileType != "jpeg") {
                    echo "track file type incorect, insert jpg, jpeg or png <br> current file type: $trackFileType";
                    //$sukses=false;
                } else {
                    //echo $trackFileType;  
                    // echo =$_FILES['gambarTrack']['name'];
                    // echo "<br>";
                    $_FILES['gambarTrack']['name'] = $tempId . '.' . $trackFileType; //nama file dijadiin id track
                    //echo $_FILES['gambarTrack']['name'];
                    //echo "<br>";
                    $oldname1 = $_FILES['gambarTrack']['tmp_name'];
                    $newName1 = "view/assets/uploads/tracks/" . $_FILES['gambarTrack']['name']; // harusnya jadi view/assets/uploads/tracks/1.jpg
                    move_uploaded_file($oldname1, $newName1);
                    echo $newName1;
                    $query = "UPDATE track SET gambar='$newName1' WHERE idT='$tempId'";
                    $this->db->executeNonSelectQuery($query);
                }
            } else {
                echo "please insert an image for track<br>";
                $sukses = false;
            }
            //medal
            if ($_FILES['gambarMedali']['name'] !== "") {
                $medalFileType = strtolower(pathinfo($_FILES['gambarMedali']['name'], PATHINFO_EXTENSION));
                if ($medalFileType != "jpg" && $medalFileType != "png" && $medalFileType != "jpeg") {
                    echo "medal file type incorect, insert jpg, jpeg or png <br> current file type: $medalFileType<br>";
                    $sukses = false;
                } else {
                    //echo $trackFileType;  
                    // echo =$_FILES['gambarTrack']['name'];
                    // echo "<br>";
                    $_FILES['gambarMedali']['name'] = $tempId . '.' . $trackFileType; //nama file dijadiin id track
                    //echo $_FILES['gambarTrack']['name'];
                    //echo "<br>";
                    $oldname2 = $_FILES['gambarMedali']['tmp_name'];
                    $newName2 = "view/assets/uploads/medals/" . $_FILES['gambarTrack']['name']; // harusnya jadi view/assets/uploads/tracks/1.jpg
                    move_uploaded_file($oldname2, $newName2);
                    $query = "UPDATE track SET gambar='$newName2' WHERE idT='$tempId'";
                    $this->db->executeNonSelectQuery($query);
                }
            } else {
                echo "please insert an image for medal<br>";
                $sukses = false;
            }
            //badge
            if ($_FILES['gambarBadge']['name'] !== "") {
                $badgeFileType = strtolower(pathinfo($_FILES['gambarBadge']['name'], PATHINFO_EXTENSION));
                if ($badgeFileType != "jpg" && $badgeFileType != "png" && $badgeFileType != "jpeg") {
                    echo "badge file type incorect, insert jpg, jpeg or png <br> current file type: $badgeFileType<br>";
                    $sukses = false;
                } else {
                    $_FILES['gambarBadge']['name'] = $tempId . '.' . $badgeFileType; //nama file dijadiin id track
                    $oldname3 = $_FILES['gambarBadge']['tmp_name'];
                    $newName3 = "view/assets/uploads/badges/" . $_FILES['gambarBadge']['name']; // harusnya jadi view/assets/uploads/tracks/1.jpg
                    move_uploaded_file($oldname3, $newName3);
                    $query = "UPDATE track SET gambar='$newName3' WHERE idT='$tempId'";
                    $this->db->executeNonSelectQuery($query);
                }
            } else {
                echo "please insert an image for badge<br>";
                $sukses = false;
            }
        }
    }
}
