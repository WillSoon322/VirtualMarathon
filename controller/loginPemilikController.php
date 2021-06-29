<?php
 require_once "controller/services/mysqlDB.php";
 require_once "model/pemilik.php";
 require_once "view/view2.php";

    class LoginPemilikController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            return View2::createView("loginPemilik.php",[]);
    
        }

        public function loginPemilik(){
            $username=$_POST["name"];
            $pass=$_POST["password"];
            $remember=$_POST["remember"];
            $query = "SELECT *
            FROM user u  INNER JOIN pemilik a ON u.idU=a.idU
            WHERE username='$username'";

            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
          
            foreach($query_result as $key => $value){
                $result[] = new Pemilik($value["idU"],$value["username"],$value["pass"],$value["profile_picture"]);
            }

            if(count($result)==0){
                echo "user no exist la";
                var_dump($result);
                // echo '<script> 
                //         alert ("Username Does Not Exist")
                //      </script>';
                //      header("location: login");
            }
            else{
                if($pass!=$result[0]->getPassword()){
                    echo "password no exist la";
                    //VALIDATION MASIH GABENER
                    // header("location: login");
                    // echo '<script> 
                    //     alert ("Wrong Password")
                    // </script>';
                }
                else{
                    session_start();
                    $_SESSION["pemilik"]["usernamePemilik"] = $result[0]->getUsername();
                    $_SESSION["pemilik"]["gambarPemilik"] = $result[0]->getGambar();
                    $_SESSION["pemilik"]["loginStatusPemilik"]=true;
                    $_SESSION["pemilik"]["idPemilik"]=$result[0]->getIdA();
                    header("location: profilePemilik");
                }
            }

            return $result;

        }
       
        }
    
        // $value["idU"],$value["no_telepon"],$value["email"],$value["jarak"]
        // ,$value["tema"],$value["region"]

    
?>
