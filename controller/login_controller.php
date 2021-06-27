<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/peserta.php";
 require_once "model/user.php";
 require_once "model/track.php";
 require_once "model/peserta.php";
    class LoginController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            return View2::createView("login.php",[]);
    
        }

        public function logIn(){
            $username=$_POST["name"];
            $pass=$_POST["password"];
            
            $query = "SELECT *
            FROM user u  INNER JOIN peserta p ON u.idU=p.idU 
            WHERE username='$username'  AND deleted!=1";

            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            $tracks=[];
            $peserta=[];
            $user=[];
            
            foreach($query_result as $key => $value){
                $user[] = new User($value["idU"],$value["username"],$value["pass"],$value["profile_picture"]);
                $peserta[] = new Peserta($value["idU"],$value["no_telepon"],$value["email"],$value["nama"],$value["Gender"],$value["kota"],$value["Alamat"],$value["usia"],$value["saldo"]);
                //$tracks[] = new Track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"],$value["tema"],$value["region"],$value["gambarMedali"],$value["gambarBadge"]);
            }
            $result[0]=$user;
            $result[1]=$peserta;
            $query = "SELECT *
            FROM user u  INNER JOIN peserta p ON u.idU=p.idU 
            INNER JOIN progress a ON u.idU=a.idU 
            INNER JOIN track t ON a.idT=t.idT 
            WHERE username='$username' ";
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $tracks[] = new Track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"],$value["tema"],$value["region"],$value["gambarMedali"],$value["gambarBadge"]);
            }
            $result[2]=$tracks;
            if(count($user)==0){
                echo "user no exist la<br>";
                var_dump($result);
                // echo '<script> 
                //         alert ("Username Does Not Exist")
                //      </script>';
                //      header("location: login");
            }
            else{
                if($pass!=$user[0]->getPassword()){
                    echo "password no exist la";
                    //VALIDATION MASIH GABENER
                    // header("location: login");
                    // echo '<script> 
                    //     alert ("Wrong Password")
                    // </script>';
                }
                else{
                    session_start();
                    $_SESSION["username"] = $user[0]->getUsername();
                    $_SESSION["saldo"] = $peserta[0]->getSaldo();
                    $_SESSION["nama"] = $peserta[0]->getNama();
                    $_SESSION["gambar"] = $user[0]->getGambar();
                    $_SESSION["usia"] = $peserta[0]->getUsia();
                    $_SESSION["Gender"] = $peserta[0]->getGender();
                    $_SESSION["Alamat"]=$peserta[0]->getAlamat();
                    $_SESSION["tracks"]=$tracks;
                    $_SESSION["loginStatus"]=true;
                    $_SESSION["idU"]=$peserta[0]->getIdU();
                    header("location: profile");
                }
            }

            return $result;

        }
       
        }
    
        // $value["idU"],$value["no_telepon"],$value["email"],$value["jarak"]
        // ,$value["tema"],$value["region"]

    
?>
