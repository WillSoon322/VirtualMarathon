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
            $query = " SELECT TOP 3 tema, count (idP) as 'pengikut' from Track t inner join Aktivitas a
                        ON t.idT=a.idT GROUP BY t.tema ORDER BY 'pengikut' DESC

                     ";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach($query_result as $key => $value){
                $result[] = new track($value["idT"],$value["pengikut"]);
            }
           
            return $result;
        }
    
       
        }
    
       
?>
