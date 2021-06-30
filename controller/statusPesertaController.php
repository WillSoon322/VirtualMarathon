<?php
 require_once "controller/services/mysqlDB.php";
 require_once "controller/view/view2.php";
 require_once "model/medal.php";
 require_once "model/peserta.php";
 require_once "model/track.php";
 require_once "model/progress.php";
 require_once "model/status.php";
    class statusPesertaController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result=$this->getStatus();
            return View2::createView("statusPeserta.php",["result"=>$result]);
    
        }
        // "SELECT idU, nama, tema, alamat 
        // FROM peserta ps INNER JOIN progress p ON ps.idU=p.idU
        // INNER JOIN track t on p.idT=t.idT
        // " ;//buat tabel 1 dan 3
        public function getStatus(){
            $query="SELECT m.idM, nama, tema, alamat,kota
                    FROM medali m INNER JOIN peserta p ON m.idU=p.idU
                    INNER JOIN track t ON m.idT=t.idT
                    WHERE m.status='Belum Dikirim'
                    " ;//buat tabel 1, medali yang belum kekirim
            $query_result = $this->db->executeSelectQuery($query);
            $result = []; 
            $tabel1=[];
            foreach($query_result as $key => $value){
                $tabel1[]=new Status($value["idM"],$value["nama"],$value["tema"],$value["kota"],$value["alamat"],NULL,NULL,NULL);
            }
            $result[0]=$tabel1;

            $query="SELECT idM, nama, alamat, `status`,noResi
                    FROM medali m INNER JOIN peserta p ON m.idU=p.idU
                    WHERE m.status!='Belum Dikirim'
                    " ;//buat tabel 2, medali yang udah kekirim
                    
            $query_result = $this->db->executeSelectQuery($query);

            $tabel2=[];
            foreach($query_result as $key => $value){
                $tabel2[]=new Status($value["idM"],$value["nama"],NULL,NULL,$value["alamat"],$value["status"],NULL,$value["noResi"]);
            }
            $result[1]=$tabel2;

            $query="SELECT ps.idU, nama, tema, persentase
                    FROM peserta ps INNER JOIN progress p ON p.idU=ps.idU
                    INNER JOIN TRACK t ON p.idT=t.idT";//buat tabel 3, progress smua peserta
                    
            $tabel3=[];
        
            $query_result = $this->db->executeSelectQuery($query);
            foreach($query_result as $key => $value){
                $tabel3[]=new Status($value["idU"],$value["nama"],$value["tema"],NULL,NULL,NULL,$value["persentase"],NULL);
            }
            $result[2]=$tabel3;
            return $result;

        }
        public function sendMedal(){
             if(isset($_POST["resi"])&&($_POST["resi"]!="")){
                 $resi=$_POST["resi"];
                 echo  $resi;
                 $idM=$_POST["id"];
                 var_dump($_POST);
                 echo $idM;
                 $query="UPDATE medali SET status='Telah Dikirim', noResi='$resi' WHERE idM='$idM'";//buat tabel 3, progress smua peserta
                 $query_result = $this->db->executeSelectQuery($query);
             }
            //$query="UPDATE medali m SET noResi='$resi' WHERE idM=";
            
        }
       
        }
    
     

    
?>