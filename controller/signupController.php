<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view.php";

    class SignupController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            return View::createView("signup.php",[]);
    
        }

        public function addUser(){
            //var_dump($_POST);
            $username = $_POST['username'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $address = $_POST['address'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];
            $re_password = $_POST['re_password'];
            $agreement=$_POST['agreement'];

            if( isset($username) && $username != "" && 
                isset($name) && $name != ""&&
                isset($gender) && $gender != ""&&
                isset($age) && $age != ""&&
                isset($address) && $address != ""&&
                isset($phone) && $phone != ""&&
                isset($password) && $password != ""&&
                isset($re_password) && $re_password != ""&&
                $agreement == "on"
            ){
               
                $username = $this->db->escapeString($username);
                $name = $this->db->escapeString($name);
                $gender = $this->db->escapeString($gender);
                $age = $this->db->escapeString($age);
                $address = $this->db->escapeString($address);
                $phone = $this->db->escapeString($phone);
                $password = $this->db->escapeString($password);
                $re_password = $this->db->escapeString($re_password);
                $agreement = $this->db->escapeString($agreement);

                $query = "INSERT INTO user (idU, pass,username) 
                        VALUES (7,'$password', '$username')";
                $this->db->executeNonSelectQuery($query);
                header('location: landing');
        }
        } 
    }
?>

