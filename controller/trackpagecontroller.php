<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/track.php";
 require_once "model/peserta.php";
 session_start();
    class trackpageController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result = $this->getTrack();
            return View2::createView("trackpage.php",["result"=>$result]);//ngirim param isi data
    
        }

        public function getTrack(){
            $bolAdaTrack=false;
            $tema=$_POST["tema"];
            $query = "SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region, t.gambarMedali, t.gambarBadge, ps.idU
                        FROM track t LEFT OUTER JOIN medali m ON m.idT=t.idT 
                         LEFT OUTER JOIN (progress p  INNER JOIN peserta ps ON p.idU= ps.idU) ON t.idT=p.idT
                        WHERE tema='$tema'
                     ";
            //tadinya *
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            $peserta=[];
            foreach($query_result as $key => $value){
                $result[] = new track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"]
                ,$value["tema"],$value["region"],$value["gambarMedali"],$value["gambarBadge"]);

                $peserta[] = new Peserta($value["idU"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
                if(isset($_SESSION["idU"])){
                if($peserta[$key]->getIdU()==$_SESSION["idU"]){
                    $bolAdaTrack=true;
                }
            }
            }
            if($bolAdaTrack==true){
                $_SESSION["pemilikTrack"]=true;
            }
            else{
                $_SESSION["pemilikTrack"]=false;
            }
            
            return $result;
        }
       
        }
    
   

    
?>