<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/track.php";
session_start();
    class BuyTrackController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result = $this->getAllTracks();
            return View2::createView("buyTrack.php",["result"=>$result]);
    
        }

        public function getAllTracks(){
            if(isset($_SESSION["trackDestination"])){
                $tema=$_SESSION["trackDestination"];
            }
            $query = "SELECT *
                        FROM track t 
                        WHERE t.tema='$tema'
                     ";
            
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach($query_result as $key => $value){
                $result[] = new Track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"]
                ,$value["tema"],$value["region"]);
              
            }
           
            return $result;
        }

        

    }
    
   

    
?>