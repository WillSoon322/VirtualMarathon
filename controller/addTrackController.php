<?php
require_once "controller/services/mysqlDB.php";
require_once "view/view.php";

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
        $gambar = $_POST['gambar'];
        $medali = $_POST['gambarMedali'];
        $badge = $_POST['gambarBadge'];

        if (
            isset($name) && $name != ""
            &&
            isset($harga) && $harga != ""
            &&
            isset($region) && $region != ""
            &&
            isset($jarak) && $jarak != ""
            &&
            isset($gambar) && $gambar != ""
        ) {


            $name = $this->db->escapeString($name);
            $harga = $this->db->escapeString($harga);
            $region = $this->db->escapeString($region);
            $jarak = $this->db->escapeString($jarak);
            $gambar = $this->db->escapeString($gambar);

            $query = "INSERT INTO track 
                         VALUES (NULL,'$harga', '$gambar','$jarak','$name','$region','$medali','$badge')";
            $this->db->executeNonSelectQuery($query);


        }
    }
}
