<?php
session_start();
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/progress.php";
 require_once "model/track.php";
    class ProgressController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result = $this->getProgress();
            return View2::createView("progress.php",["result"=>$result]);
        }

       public function getProgress(){
        if(isset($_SESSION["trackDestination"])){
            $tema=$_SESSION["trackDestination"];
           
        }
        else{
            echo "error no track destination";
        }
        if(isset($_SESSION["idU"])){
            $idU=$_SESSION["idU"];
        }
        else{
            echo "error no user logged in";
        }
        
        $query = "SELECT *
        FROM track t INNER JOIN progress p ON t.idT=p.idT INNER JOIN peserta ps ON ps.idU= p.idU
        WHERE t.tema='$tema' AND ps.idU='$idU'
        ";

        $query_result = $this->db->executeSelectQuery($query);
        $result = [];
        foreach($query_result as $key => $value){
            $result[] = new Progress($value["persentase"],$value["tema"],$value["jarak_total"],$value["sisa_jarak"],$value["jarak"],$value["idT"]);
        }
        
        return $result;
       }
      
       public function addProgress(){
            $result=$this->getProgress();
           if(isset($_POST["progressInputText"])){
               $jarak_total=(double) $result[0]->getJarakTotal();//JARAK TOTAL=CURRENT JARAK
               $jarak=(double) $result[0]->getJarak();//JARAK=JARAK TOTAL TRACK 
               $jarak_total=(double)($jarak_total+  $_POST["progressInputText"]);
               if($jarak_total>$jarak){
                   $jarak_total=$jarak;
               }

              $jarakSisa=(double) $result[0]->getSisaJarak();
               $jarakSisa=(double)($jarakSisa - $_POST["progressInputText"]);

               if($jarakSisa<=0){//belum di test (by 22 june 2021)
                    $jarakSisa=0;
                    $this->addMedal();
               }

               
                
               $persentase= (float) ($jarak_total/$jarak)*100;
                
               $idU=$_SESSION["idU"];
               $idT=$result[0]->getIdT();
               
               $tema=$_SESSION["trackDestination"];

               $query = "UPDATE progress p
               SET p.persentase = '$persentase', p.jarak_total = '$jarak_total', p.sisa_jarak='$jarakSisa'
               WHERE p.idU='$idU' AND p.idT ='$idT'
               ";
               $query_result = $this->db->executeNonSelectQuery($query);
               
           }
           else{
               echo "error, progress not found";
           }
           $_SESSION["progress"]=$tema;
       }

       private function addMedal(){
           if(isset($_SESSION["trackDestination"])){
               $tema=$_SESSION["trackDestination"];
           }
           if(isset($_SESSION["idU"])){
            $idU=$_SESSION["idU"];
        }
           $query="SELECT idT FROM track where tema='$tema'";
           $query_result = $this->db->executeSelectQuery($query);
           foreach($query_result as $key => $value){
            $result = new track($value["idT"],NULL,NULL,NULL,NULL,NULL,NULL,NULL);
            }
            $idT=$result->getIdT();
            $query = "INSERT INTO medali 
             VALUES (NULL,'Belum Dikirim','$idT','$idU',NULL)
           
            ";
            $query_result = $this->db->executeNonSelectQuery($query);
       }
        }
    
   

    
?>