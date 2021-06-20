<?php
 require_once "controller/services/mysqlDB.php";
 require_once "model/track.php";
 require_once "view/view.php";

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
            $query = " SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region 
                        FROM track t";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach($query_result as $key => $value){
                $result[] = new track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"]
                ,$value["tema"],$value["region"]);
            }
           
            return $result;
        }
    
       
        }
    
       
?>

<!-- SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region 
                        FROM track t -->

<!-- SELECT TOP 3 tema, count (idP) as 'pengikut' from Track t inner join Aktivitas a
                        ON t.idT=a.idT GROUP BY t.tema ORDER BY 'pengikut' DESC -->
