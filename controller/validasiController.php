<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/topUp.php";
 require_once "model/peserta.php";

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
                ,$value["tanggal"],$value["status"],$value["gambar_bukti"],$value["idP"],$value["jenis"],$value["nama"]);
            }
           $result[0]=$temp;


           $query = "SELECT * FROM transaksi_top_up t INNER JOIN peserta p ON p.idU=t.idP where t.`status` = 'Tervalidasi'
           ";
            $query_result = $this->db->executeSelectQuery($query);
            
            $temp=[];//tervalidasi
            foreach($query_result as $key => $value){
                 $temp[] = new TopUp($value["id_top_up"],$value["saldo_awal"],$value["saldo_akhir"],$value["nominal"]
                ,$value["tanggal"],$value["status"],$value["gambar_bukti"],$value["idP"],$value["jenis"],$value["nama"]);
            }
            $result[1]=$temp;


            $query = "SELECT * FROM transaksi_top_up t INNER JOIN peserta p ON p.idU=t.idP where t.`status` = 'Ditolak'
                     ";
             $query_result = $this->db->executeSelectQuery($query);
             
             $temp=[];//ditolak
             foreach($query_result as $key => $value){
                  $temp[] = new TopUp($value["id_top_up"],$value["saldo_awal"],$value["saldo_akhir"],$value["nominal"]
                 ,$value["tanggal"],$value["status"],$value["gambar_bukti"],$value["idP"],$value["jenis"],$value["nama"]);
             }
             $result[2]=$temp;

            return $result;
        }

        function validate(){
            if(isset($_POST["validate"])){
                if($_POST["validate"]==true){
                    $val="Tervalidasi";
                }
            }
            else if (isset($_POST["reject"])){
                    if($_POST["reject"]==true){
                    $val="Ditolak";
                }
            }
            else{
                    echo "error validating";
             }
                
                $idT=$_POST["idT"];
                $query = "UPDATE transaksi_top_up SET status='$val' WHERE id_top_up='$idT'
                     ";
                $query_result = $this->db->executeNonSelectQuery($query);
            }
        }
       
        
    
       
?>

<!-- SELECT t.idT, t.harga, t.gambar, t.jarak, t.tema, t.region 
                        FROM track t -->

<!-- SELECT TOP 3 tema, count (idP) as 'pengikut' from Track t inner join Aktivitas a
                        ON t.idT=a.idT GROUP BY t.tema ORDER BY 'pengikut' DESC -->
