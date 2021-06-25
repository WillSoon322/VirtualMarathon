<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/track.php";
    session_start();
    class profileController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result=$this->getBadges();
            return View2::createView("profile.php",["result"=>$result]);
    
        }

       public function getBadges(){
            $result=[];
            $temp=[];
            $idU=$_SESSION["idU"];
            $query="SELECT gambarBadge FROM track t INNER JOIN progress p ON t.idT=p.idT INNER JOIN peserta ps ON p.idU=ps.idU WHERE ps.idU='$idU' AND persentase=100";
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $temp[] = new track(NULL,NULL,NULL,NULL,NULL,NULL,NULL,$value["gambarBadge"]);
                }
            $result[]=$temp;
            $temp=[];

            $query="SELECT tema FROM track t INNER JOIN progress p ON t.idT=p.idT INNER JOIN peserta ps ON p.idU=ps.idU WHERE ps.idU='$idU'";
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $temp[] = new track(NULL,NULL,NULL,NULL,$value["tema"],NULL,NULL,NULL);
                }
            $result[]=$temp;
                return $result;
            }
            
        }
       
        
    
   

    
?>