<?php
 require_once "controller/services/mysqlDB.php";
 require_once "model/track.php";
 require_once "controller/view/view.php";

    class landingController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result = $this->getAllTracks();
            return View::createView("landing.php",["result"=>$result]);
    
        }
        public function getAllTracks(){
            $query = "SELECT * FROM track t INNER JOIN (SELECT p.idT, count(p.idT) as c FROM progress p GROUP BY p.idT ORDER BY c DESC LIMIT 3)as R ON t.idT=R.idT
                     ";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach($query_result as $key => $value){
                // $result[] = new track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"]
                // ,$value["tema"],$value["region"],$value["gambarMedali"],$value["gambarBadge"]);
                $result[] = new track(NULL,NULL,$value["gambar"],NULL,NULL,NULL,NULL,NULL);
            }
           
            return $result;
        }
        public function logOut (){
           session_start();
            //session_destroy();
            unset($_SESSION["peserta"]["username"]);
            unset($_SESSION["peserta"]["saldo"]);
            unset($_SESSION["peserta"]["tracks"]);
            unset($_SESSION["peserta"]["loginStatus"] );
            unset($_SESSION["peserta"]["idU"] );
            unset($_SESSION["peserta"]);//biar aman 
           $result = $this->getAllTracks();
            return View::createView("landing.php",["result"=>$result]);
            //unset($_SESSION["peserta"]);
            
        }

        
        }
    
       
?>

<!-- SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region 
                        FROM track t -->

<!-- SELECT TOP 3 tema, count (idP) as 'pengikut' from Track t inner join Aktivitas a
                        ON t.idT=a.idT GROUP BY t.tema ORDER BY 'pengikut' DESC -->
