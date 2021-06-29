<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/topUp.php";
 require_once "model/peserta.php";

 session_start();
    class ValidasiController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result = $this->getAllTopUp();
           //"result"=>$result
            return View2::createView("validasi.php",["result"=>$result]);
    
        }
        public function getAllTopUp(){
            $query = "SELECT * FROM transaksi_top_up t INNER JOIN peserta p ON p.idU=t.idP where t.`status` = 'Belum Tervalidasi'
                     ";
            $query_result = $this->db->executeSelectQuery($query);
            $result = [];
            $temp=[];//belum tervalidasi
            foreach($query_result as $key => $value){
                $temp[] = new TopUp($value["id_top_up"],$value["saldo_awal"],$value["saldo_akhir"],$value["nominal"]
                ,$value["tanggal"],$value["status"],$value["gambar_bukti"],$value["idP"],$value["jenis"],$value["nama"],$value["idA"]);
            }
           $result[0]=$temp;


           $query = "SELECT * FROM transaksi_top_up t INNER JOIN peserta p ON p.idU=t.idP where t.`status` = 'Tervalidasi'
           ";
            $query_result = $this->db->executeSelectQuery($query);
            
            $temp=[];//tervalidasi
            foreach($query_result as $key => $value){
                 $temp[] = new TopUp($value["id_top_up"],$value["saldo_awal"],$value["saldo_akhir"],$value["nominal"]
                ,$value["tanggal"],$value["status"],$value["gambar_bukti"],$value["idP"],$value["jenis"],$value["nama"],$value["idA"]);
            }
            $result[1]=$temp;


            $query = "SELECT * FROM transaksi_top_up t INNER JOIN peserta p ON p.idU=t.idP where t.`status` = 'Ditolak'
                     ";
             $query_result = $this->db->executeSelectQuery($query);
             
             $temp=[];//ditolak
             foreach($query_result as $key => $value){
                  $temp[] = new TopUp($value["id_top_up"],$value["saldo_awal"],$value["saldo_akhir"],$value["nominal"]
                 ,$value["tanggal"],$value["status"],$value["gambar_bukti"],$value["idP"],$value["jenis"],$value["nama"],$value["idA"]);
             }
             $result[2]=$temp;

            return $result;
        }
        function validate(){
            if(isset($_SESSION["admin"]["idA"])){
                $idA=$_SESSION["admin"]["idA"];
                if(isset($_POST["validation"])){
                    if($_POST["validation"]=="true"){
                        $val="Tervalidasi";}
                    else{
                        $val="Ditolak";}}
                else{echo "error validating";}
                 echo $val;
                    if(isset($_POST["idT"])){
                        $idT=$_POST["idT"];
                    }
                    $query = "UPDATE transaksi_top_up t SET status ='$val', idA='$idA' WHERE t.id_top_up='$idT'";
                    $query_result = $this->db->executeNonSelectQuery($query);
                    if($val=="Tervalidasi"){
                    //tambah saldo user
                    $query="SELECT idP FROM transaksi_top_up WHERE id_top_up='$idT'";//dapet idU
                    $temp=$this->db->executeSelectQuery($query);
                    $idP=(int)$temp[0]["idP"];
                    $query="SELECT saldo FROM peserta WHERE idU='$idP'";//dapet saldo sekarang
                    $temp=$this->db->executeSelectQuery($query);
                    $saldo=0+$temp[0]["saldo"];
                    $query="SELECT nominal FROM transaksi_top_up WHERE id_top_up='$idT'";//dapet NAMBAH BRP
                    $temp=$this->db->executeSelectQuery($query);
                    $nominal=0+$temp[0]["nominal"];
                    $saldoAkhir=$saldo+$nominal;
                    $_SESSION["peserta"]["saldo"]=$saldoAkhir;
                    $query = "UPDATE peserta ps
                                SET ps.saldo = '$saldoAkhir'
                                WHERE ps.idU='$idP' " ;
                    $query_result = $this->db->executeNonSelectQuery($query);
                   //$_SESSION["saldo"]=$saldoAfter;PINDAHIN KE VALIDASI
                    }
            }
            else{
                echo "error no admin detected";
            }
             //echo $_POST["validation"];
            // echo $_POST["idT"];
            
                

            }
    
      
        }
        
?>

<!-- SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region 
                        FROM track t -->

<!-- SELECT TOP 3 tema, count (idP) as 'pengikut' from Track t inner join Aktivitas a
                        ON t.idT=a.idT GROUP BY t.tema ORDER BY 'pengikut' DESC -->
