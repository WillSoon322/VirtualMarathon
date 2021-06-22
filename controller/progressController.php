<?php
session_start();
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/progress.php";
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
        $tema=$_SESSION["trackDestination"];
        $idU=$_SESSION["idU"];
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
               $jarak_total=(int) $result[0]->getJarakTotal();//JARAK TOTAL=CURRENT JARAK
               $jarak_total=$jarak_total+ (int) $_POST["progressInputText"];
               
              $jarakSisa=(int) $result[0]->getSisaJarak();
               $jarakSisa=($jarakSisa - (int) $_POST["progressInputText"]);

               $jarak=(int) $result[0]->getJarak();//JARAK=JARAK TOTAL TRACK 
                
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
            
       }
        }
    
   

    
?>