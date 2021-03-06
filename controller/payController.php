<?php
 require_once "controller/services/mysqlDB.php";
 require_once "model/peserta.php";
 require_once "model/track.php";
 require_once "controller/view/view.php";

    session_start();
    class PayController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }


        public function pay(){
            $tema=$_SESSION["peserta"]["trackDestination"];
            //$query = "SELECT * FROM track t WHERE t.tema='$tema'";
            $query = "SELECT idT,jarak,harga FROM track t WHERE t.tema='$tema'";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            foreach($query_result as $key => $value){
                $result[] = new track($value["idT"],$value["harga"],NULL,$value["jarak"]
                ,NULL,NULL,NULL,NULL);
            }
            $idT=$result[0]->getIdT();
            $jarak=$result[0]->getJarak();
            $harga=$result[0]->getHarga();

            $saldo=$_SESSION["peserta"]["saldo"];
            //echo $saldo;
            //echo $harga;
            //echo $tema;            
            $idU=$_SESSION["peserta"]["idU"];
            $saldoAfter=(int) $saldo-$harga;
            $_SESSION["peserta"]["saldo"]=$saldoAfter;
            //echo $saldoAfter;
            //echo "idT";
            //echo $result[0]->getIdT();

            $query = "UPDATE peserta ps
            SET ps.saldo = '$saldoAfter'
            WHERE ps.idU='$idU' ";

            $query_result = $this->db->executeNonSelectQuery($query);
            
            $query = "INSERT INTO progress  VALUES ('$idU','$idT',0,'$jarak',0)";

            $query_result = $this->db->executeNonSelectQuery($query);

            $tgl=date("Y-m-d");

            $query="INSERT INTO transaksi_pembayaran 
                    VALUES (NULL,'$saldo','$saldoAfter','$tema','$tgl','$idU')
            ";
            $query_result = $this->db->executeNonSelectQuery($query);
        }
       
        }
    
       
?>

<!-- SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region 
                        FROM track t -->

<!-- SELECT TOP 3 tema, count (idP) as 'pengikut' from Track t inner join Aktivitas a
                        ON t.idT=a.idT GROUP BY t.tema ORDER BY 'pengikut' DESC -->
