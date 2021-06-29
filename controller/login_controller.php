<?php
require_once "controller/services/mysqlDB.php";
require_once "view/view2.php";
require_once "model/peserta.php";
require_once "model/user.php";
require_once "model/track.php";
require_once "model/peserta.php";
class LoginController
{

    protected $db;

    public function __construct()
    {
        $this->db = new mySQLDB("localhost", "root", "", "tugasbesar");
    }

    public function viewAll()
    {
        return View2::createView("login.php", []);
    }

    public function logIn()
    {
        if(isset($_POST["name"])){
            $username = $_POST["name"];
        }
        else{
            echo ("error username not entered");
        }

        if(isset($_POST["password"])){
            $pass = $_POST["password"];
        }
        else{
            echo ("error password not entered");
        }
        

        $query = "SELECT *
            FROM user u  INNER JOIN peserta p ON u.idU=p.idU 
            WHERE username='$username'  AND deleted!=1";

        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        $tracks = [];
        $peserta = [];
        $user = [];

        foreach ($query_result as $key => $value) {//cuma sekali iterate aja 
            $user[] = new User($value["idU"], $value["username"], $value["pass"], $value["profile_picture"]);
            $peserta[] = new Peserta($value["idU"], $value["no_telepon"], $value["email"], $value["nama"], 
            $value["Gender"], $value["kota"], $value["Alamat"], $value["usia"], $value["saldo"]);
        }
        $result[0] = $user;
        $result[1] = $peserta;
        $query = "SELECT *
            FROM user u  INNER JOIN peserta p ON u.idU=p.idU 
            INNER JOIN progress a ON u.idU=a.idU 
            INNER JOIN track t ON a.idT=t.idT 
            WHERE username='$username' ";
        $query_result = $this->db->executeSelectQuery($query);
        foreach ($query_result as $key => $value) {
            $tracks[] = new Track($value["idT"], $value["harga"], $value["gambar"], $value["jarak"], $value["tema"], 
            $value["region"], $value["gambarMedali"], $value["gambarBadge"]);
        }
        $result[2] = $tracks;
        if (count($user) == 0) {
            echo "error wrong username <br>";
            var_dump($result);
        } else {
            if ($pass != $user[0]->getPassword()) {
                echo "error wrong password <br>";
            } else {
                session_start();
                $_SESSION["peserta"]["username"] = $user[0]->getUsername();
                $_SESSION["peserta"]["saldo"] = $peserta[0]->getSaldo();
                //$_SESSION["peserta"]["nama"] = $peserta[0]->getNama();
                //$_SESSION["peserta"]["gambar"] = $user[0]->getGambar();
                //$_SESSION["peserta"]["usia"] = $peserta[0]->getUsia();
                //$_SESSION["peserta"]["Gender"] = $peserta[0]->getGender();
                //$_SESSION["peserta"]["Alamat"] = $peserta[0]->getAlamat();
                $_SESSION["peserta"]["tracks"] = $tracks;
                $_SESSION["peserta"]["loginStatus"] = true;
                $_SESSION["peserta"]["idU"] = $peserta[0]->getIdU();
                header("location: profile");
            }
        }

        return $result;
    }
}
