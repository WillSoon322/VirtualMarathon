<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
 require_once "model/trackCount.php";
 require_once "model/count.php";
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
            $query = "SELECT count(idU) FROM peserta WHERE deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $result[0]=$query_result[0]["count(idU)"];//TOTAL USER WEBSITE
            //var_dump($result[0]);

            //TOTAL DUIT
            $query="SELECT SUM(nominal) FROM transaksi_top_up WHERE `status`='Tervalidasi'";
            $query_result=$this->db->executeSelectQuery($query);
            $result[1]=$query_result[0]["SUM(nominal)"];//TOTAL PENGHASILAN
            //var_dump($query_result);

            //TOTAL TRACK
            $query = "SELECT count(idT) FROM Track";
            $query_result=$this->db->executeSelectQuery($query);
            $result[2]=$query_result[0]["count(idT)"];//TOTAL PENGHASILAN
            

             //GRAPH (top up per bulan)
             $temp=[];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=1 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[0]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=2 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[1]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=3 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[2]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=4 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[3]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=5 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[4]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=6 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[5]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=7 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[6]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=8 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[7]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=9 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[8]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=10 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[9]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=11 AND `status`='Tervalidasi'";
             $query_result=$this->db->executeSelectQuery($query);
             $temp[10]=$query_result[0]["SUM(nominal)"];
             $query = "SELECT SUM(nominal) FROM transaksi_top_up WHERE MONTH(tanggal)=12 AND `status`='Tervalidasi'";//and tahun= curr tahun
             $query_result=$this->db->executeSelectQuery($query);
             $temp[11]=$query_result[0]["SUM(nominal)"];
             $result[3]=$temp;
            //var_dump($result[3]);

            //track terpopuler
            $query="SELECT t.idT,tema,c FROM track t INNER JOIN (SELECT p.idT, count(p.idT) as c FROM progress p GROUP BY p.idT ORDER BY c DESC )as R ON t.idT=R.idT";
            $query_result=$this->db->executeSelectQuery($query);
            $temp=[];
            foreach($query_result as $key => $value){
                $temp[] = new TrackCount($value["idT"],$value["tema"],$value["c"]);
            }
            $result[4]=$temp;

            //range umur
            $temp=[];
            $query="SELECT count(usia) FROM peserta WHERE usia>=1 AND usia<=10 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[0]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=11 AND usia<=20 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[1]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=21 AND usia<=30 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[2]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=31 AND usia<=40 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[3]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=41 AND usia<=50 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[4]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=51 AND usia<=60 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[5]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=61 AND usia<=70 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[6]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=71 AND usia<=80 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[7]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=81 AND usia<=90 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[8]=new Count($query_result[0]["count(usia)"]);
            $query="SELECT count(usia) FROM peserta WHERE usia>=91 AND usia<=100 AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[9]=new Count($query_result[0]["count(usia)"]);
    
            $result[5]=$temp;
            //var_dump($result[5]);

            $temp=[];//0 buat cowo 1 buat cewe
            $query="SELECT count(Gender) FROM peserta WHERE Gender='Pria' AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[0]=new Count($query_result[0]["count(Gender)"]);
            $query="SELECT count(Gender) FROM peserta WHERE Gender='Wanita' AND deleted!=1";
            $query_result=$this->db->executeSelectQuery($query);
            $temp[1]=new Count($query_result[0]["count(Gender)"]);
            $result[6]=$temp;

            $temp=[];
            $bulan = 6;
            $query="SELECT id_top_up, idP, nominal, tanggal FROM transaksi_top_up WHERE MONTH(tanggal)='$bulan' AND `status`='Tervalidasi'";
            $query_result=$this->db->executeSelectQuery($query);
            // var_dump($query_result);

            $result[7] = $query_result;
            return $result;
            }
             
            //GRAPH
            // PAKE $RESULT[1]
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