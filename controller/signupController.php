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
            $email = $_POST['email'];

            $usernamelength = strlen($username);

            $passwordlength = strlen($password);
            $re_passwordlength = strlen($re_password);


            if( isset($username) && $username != "" &&
                $usernamelength > 5 && $usernamelength < 16
            &&
                isset($name) && $name != ""
            &&
                isset($gender) && $gender != ""
            &&
                isset($age) && $age != ""
            &&
                isset($address) && $address != ""
            &&
                isset($phone) && $phone != ""
            &&
                isset($password) && $password != ""&&
                $passwordlength > 8 && $passwordlength < 24
            &&
                isset($re_password) && $re_password != ""&&
                $re_passwordlength > 8 && $re_passwordlength < 24
            &&
                isset($email) && $email != ""
            &&
                $agreement == "on"
           
            ){
                echo "sukses";
                $username = $this->db->escapeString($username);
                $name = $this->db->escapeString($name);
                $gender = $this->db->escapeString($gender);
                $age = $this->db->escapeString($age);
                $address = $this->db->escapeString($address);
                $phone = $this->db->escapeString($phone);
                $password = $this->db->escapeString($password);
                $re_password = $this->db->escapeString($re_password);
                $agreement = $this->db->escapeString($agreement);
                $email= $this->db->escapeString($email);
                
                 $query = "INSERT INTO user (idU, pass,username) 
                         VALUES (8,'$password', '$username')";
                 $this->db->executeNonSelectQuery($query);

                $query = "INSERT INTO peserta (idU,no_telepon,email,nama,Gender,Alamat,usia) 
                        VALUES (8,'$phone','$email','$name','$gender','$address','$age')";
                $this->db->executeNonSelectQuery($query);
                header('location: landing');

        } else {
            if($username == null){
                //username is required
            }else{
                if($usernamelength < 5 || $usernamelength > 16){
                    //username need to be between 5 - 16 long
                }
            }

            if($name == null){
                //name is required
            }

            if($age == null){
                //age is required
            }

            if($address == null){
                //address is required
            }

            if($phone == null){
                //phone is required
            }

            if($password == null){
                //password is required
            }else{
                if($passwordlength < 8 || $passwordlength > 24){
                    //password need to be between 8 - 24 long
                }
            }

            if($re_password != $password){
                //password does not match
            }
        }
        } 
    }
