<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/track.php";

    class tracksController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result = $this->getAllTracks();
            return View2::createView("tracks.php",["result"=>$result]);
    
        }

        public function getAllTracks(){
            $query = "SELECT *
                        FROM track t
                     ";
            
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach($query_result as $key => $value){
                $result[] = new track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"]
                ,$value["tema"],$value["region"],$value["gambarMedali"],$value["gambarBadge"]);
            }
           
            return $result;
        }

       
        }
    
   

    
?>