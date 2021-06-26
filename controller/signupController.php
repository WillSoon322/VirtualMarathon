<?php
require_once "controller/services/mysqlDB.php";
require_once "view/view2.php";

class SignupController
{

    protected $db;

    public function __construct()
    {
        $this->db = new mySQLDB("localhost", "root", "", "tugasbesar");
    }

    public function viewAll()
    {
        return View2::createView("signup.php", []);
    }

    public function addUser()
    {
        //var_dump($_POST);
        $username = $_POST['username'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $kota=$_POST['city'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $re_password = $_POST['re_password'];
        $agreement = $_POST['agreement'];
        $email = $_POST['email'];
        
        $querycheck = "SELECT COUNT(username) AS c FROM user WHERE username = '$username'";
        $count = $this->db->executeSelectQuery($querycheck);
        if ($count[0]['c'] == 0) {
            
            $username = $this->db->escapeString($username);
            $name = $this->db->escapeString($name);
            $gender = $this->db->escapeString($gender);
            $age = $this->db->escapeString($age);
            $address = $this->db->escapeString($address);
            $kota= $this->db->escapeString($kota);
            $phone = $this->db->escapeString($phone);
            $password = $this->db->escapeString($password);
            $re_password = $this->db->escapeString($re_password);
            $agreement = $this->db->escapeString($agreement);
            $email = $this->db->escapeString($email);

            $query = "INSERT INTO user 
                         VALUES (NULL,'$password', '$username',NULL)";
            $this->db->executeNonSelectQuery($query);
            
            $query="SELECT idU from user WHERE username='$username'";
            $tempId=$this->db->executeSelectQuery($query);
            var_dump($tempId);
            $idU=0+$tempId[0]["idU"];
            var_dump($idU);
            $query = "INSERT INTO peserta 
                        VALUES ('$idU','$phone','$email','$name','$gender','$kota','$address','$age',0)";
            $this->db->executeNonSelectQuery($query);

            session_start();
            $_SESSION["loginStatus"] = true;
            $_SESSION["username"] = $username;
            $_SESSION["idU"]=$idU;
            header('location: login');
        }else{
            header('location: login');
        }
    }
}
