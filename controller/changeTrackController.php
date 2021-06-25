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
        if($_POST['track']!='default'){
        if(isset($_POST['trackbaru']) and $_POST['trackbaru'] != ""){ //nama
            $tempId = (int)$_POST['track'];
            $tempNama = $_POST['trackbaru'];
            $query = "UPDATE track SET tema = '$tempNama' WHERE track.idT=$tempId";
            $this->db->executeNonSelectQuery($query);
        }else{
            echo "ga";
        }

        if(isset($_POST['harga']) and $_POST['harga'] != ""){ //harga
            $tempId = (int)$_POST['track'];
            $tempValue = $_POST['harga'];
            $query = "UPDATE track SET harga = $tempValue WHERE track.idT=$tempId";
            $this->db->executeNonSelectQuery($query);
        }else{
            echo "ga";
        }

        if(isset($_POST['region']) and $_POST['region'] != ""){ //region
            $tempId = (int)$_POST['track'];
            $tempValue = $_POST['region'];
            $query = "UPDATE track SET region = $tempValue WHERE track.idT=$tempId";
            $this->db->executeNonSelectQuery($query);
        }else{
            echo "ga";
        }

        if(isset($_POST['jarak']) and $_POST['jarak'] != ""){ //jarak
            $tempId = (int)$_POST['track'];
            $tempValue = $_POST['jarak'];
            $query = "UPDATE track SET jarak = '$tempValue' WHERE track.idT=$tempId";
            $this->db->executeNonSelectQuery($query);
        }else{
            echo "ga";
        }

        var_dump($_FILES);

        if(isset($_POST['fileToUploadGambar']) and $_POST['fileToUploadGambar'] != ""){ //jarak
            $tempId = (int)$_POST['track'];
            $tempValue = $_POST['fileToUploadGambar'];
            $query = "UPDATE track SET gambar = '$tempValue' WHERE track.idT=$tempId";
            $this->db->executeNonSelectQuery($query);
        }else{
            echo "ga";
        }
            
    }
    }
}
