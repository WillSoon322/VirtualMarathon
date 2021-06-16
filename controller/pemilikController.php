<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view.php";

    class PemilikController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            return View::createView("pemilik.php",[]);
    
        }

        public function addTrack(){
            //var_dump($_POST);
            $name = $_POST['name'];
            $harga = $_POST['harga'];
            $region = $_POST['region'];
            $jarak = $_POST['jarak'];
            $gambar = $_POST['gambar'];
           


            if( isset($name) && $name != "" 
            &&
                isset($harga) && $harga != ""
            &&
                isset($region) && $region != ""
            &&
                isset($jarak) && $jarak != ""
            &&
                isset($gambar) && $gambar != ""
            ){
                
                
                $name = $this->db->escapeString($name);
                $harga = $this->db->escapeString($harga);
                $region = $this->db->escapeString($region);
                $jarak = $this->db->escapeString($jarak);
                $gambar = $this->db->escapeString($gambar);
                
                 $query = "INSERT INTO track 
                         VALUES (5,'$harga', '$gambar','$jarak','$name','$region')";
                 $this->db->executeNonSelectQuery($query);

              
                

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
