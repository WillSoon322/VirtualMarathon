<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
    class LaporanController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            $result[]=$this->getLaporan();
            return View2::createView("laporan.php",["result"=>$result]);
    
        }

        public function getLaporan(){
            $result=[];
            //TOTAL USER
            $query = "SELECT count(idU) FROM peserta";
            $query_result=$this->db->executeSelectQuery($query);
            $result[0]=$query_result[0]["count(idU)"];//TOTAL USER WEBSITE
            //var_dump($result[0]);

            //TOTAL DUIT
            $query="SELECT SUM(nominal) FROM transaksi_top_up";
            $query_result=$this->db->executeSelectQuery($query);
            $result[1]=$query_result[0]["SUM(nominal)"];//TOTAL PENGHASILAN
            //var_dump($query_result);

            //TOTAL TRACK
            $query = "SELECT count(idT) FROM Track";
            $query_result=$this->db->executeSelectQuery($query);
            $result[2]=$query_result[0]["count(idT)"];//TOTAL PENGHASILAN
            

             //GRAPH (top up per bulan)
             $temp=[];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=1";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[0]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=2";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[1]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=3";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[2]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=4";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[3]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=5";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[4]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=6";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[5]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=7";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[6]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=8";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[7]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=9";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[8]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=10";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[9]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=11";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[10]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=12";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[11]=$query_result[0]["SUM(nominal)"];
             $result[3]=$temp;
            //var_dump($result[3]);
             return $result;
            //GRAPH
            // PAKE $RESULT[1]
        }
    }
   
?>
<!-- //TOTAL DUIT
            $query = "SELECT c,harga FROM 
                    ((SELECT p.idT, count(p.idT) as c FROM progress p GROUP BY p.idT) as R 
                    INNER JOIN track t ON R.idT=t.idT)";
            $query_result=$this->db->executeSelectQuery($query);
            $temp=[];
            foreach($query_result as $key => $value){
                $temp[]=[$value["c"],$value["harga"]];
            }
            $result[1]=$temp;//BERISI ROW COUNT DAN HARGA
            //var_dump($result); -->

            <!-- //TRACK TERPOPULER
            $query="SELECT tema FROM ((SELECT p.idT, count(p.idT) as c FROM progress p GROUP BY p.idT ORDER BY c DESC LIMIT 1) as R INNER JOIN track t ON R.idT=t.idT)";
            $query_result=$this->db->executeSelectQuery($query);
            $result[3]=$query_result[0]["tema"]; -->