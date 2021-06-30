<?php
 require_once "controller/services/mysqlDB.php";
 require_once "controller/view/view2.php";
 require_once "model/peserta.php";
 session_start();
    class TopUpController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            return View2::createView("topup.php",[]);
    
        }

        public function topUp(){
            if(isset($_POST["confirm_ammount"])){
                $nominal=$_POST["confirm_ammount"];
            }
            if(isset($_POST["confirm_method"])){
                $method=$_POST["confirm_method"];
            }
                 $query = "SELECT count(id_top_up) FROM transaksi_top_up";//untuk dapet id baru
                 $result=$this->db->executeSelectQuery($query);
                 $idT=1+$result[0]['count(id_top_up)'];
                
                $sukses=true;
            
            $saldo=$_SESSION["peserta"]["saldo"];      
            $idU=$_SESSION["peserta"]["idU"];
            $saldoAfter=(int) $saldo+$nominal;
            
            $date=date("y/m/d");
            if($_FILES['bukti']['name']!==""){
                $fileType = strtolower(pathinfo($_FILES['bukti']['name'], PATHINFO_EXTENSION));
                if($fileType!="jpg"&&$fileType!="png"&&$fileType!="jpeg"){
                    echo " file type incorect, insert jpg, jpeg or png <br> current file type: $fileType"   ;
                    $sukses=false;
                }
                else{
                    $_FILES['bukti']['name']=$idT.'.'.$fileType;
                }
    
                $oldname1=$_FILES['bukti']['tmp_name'];
                $newName1="view/assets/uploads/bukti/".$_FILES['bukti']['name'];
            }
             else{
                 echo "please insert an image for bukti<br>";
                 $sukses=false;
             }

             
            if($sukses==true){
                move_uploaded_file($oldname1,$newName1);
                echo "saldo: $saldo<br>";
                echo "after: $saldoAfter<br>";
                echo "nominal: $nominal<br>";
                echo "date: $date<br>";
                echo "newname: $newName1<br>";
                echo "idU: $idU<br>";
                echo "method: $method<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
                $query = "INSERT INTO transaksi_top_up  VALUES (NULL,'$saldo','$saldoAfter','$nominal','$date','Belum Tervalidasi','$newName1','$idU','$method',NULL)";
                $query_result = $this->db->executeNonSelectQuery($query);
            }
            else{
                echo "transaksi gagal";
            }
            
           

            
        }

        }
    
   

    
?>