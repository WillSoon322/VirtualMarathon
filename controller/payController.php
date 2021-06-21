<?php
 require_once "controller/services/mysqlDB.php";
 require_once "model/peserta.php";
 require_once "model/track.php";
 require_once "view/view.php";

    session_start();
    class PayController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }


        public function pay(){
            $tema=$_SESSION["trackDestination"];
            $query = "SELECT * FROM track t WHERE t.tema='$tema'";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach($query_result as $key => $value){
                $result[] = new track($value["idT"],$value["harga"],$value["gambar"],$value["jarak"]
                ,$value["tema"],$value["region"]);
            }
            $idT=$result[0]->getIdT();
            $jarak=$result[0]->getIdT();
            $harga=$result[0]->getHarga();

            $saldo=$_SESSION["saldo"];
            echo $saldo;
            echo $harga;
            echo $tema;            
            $idU=$_SESSION["idU"];
            $saldoAfter=(int) $saldo-$harga;
            $_SESSION["saldo"]=$saldoAfter;
            echo $saldoAfter;
            echo "idT";
            echo $result[0]->getIdT();

            $query = "UPDATE peserta ps
            SET ps.saldo = '$saldoAfter'
            WHERE ps.idU='$idU' ";

            $query_result = $this->db->executeSelectQuery($query);
            
            $query = "INSERT INTO progress  VALUES ('$idU','$idT',0,'$jarak',0)";

            $query_result = $this->db->executeSelectQuery($query);
        }
       
        }
    
       
?>

<!-- SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region 
                        FROM track t -->

<!-- SELECT TOP 3 tema, count (idP) as 'pengikut' from Track t inner join Aktivitas a
                        ON t.idT=a.idT GROUP BY t.tema ORDER BY 'pengikut' DESC -->
