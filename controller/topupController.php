<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";
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
           
                //$bukti=$_POST["bukti"];
                 $query = "SELECT count(id_top_up) FROM transaksi_top_up";//untuk dapet id baru
                 $result=$this->db->executeSelectQuery($query);
                 $idT=1+$result[0]['count(id_top_up)'];
                //var_dump($idT);
                
                $sukses=true;
            
            $saldo=$_SESSION["saldo"];  
            //var_dump($saldo);      
            $idU=$_SESSION["idU"];
            //var_dump($idU);  
            $saldoAfter=(int) $saldo+$nominal;
            //var_dump($saldoAfter);  
            
            $date=date("y/m/d");
            var_dump($date);  
            // $query = "UPDATE peserta ps
            // SET ps.saldo = '$saldoAfter'
            // WHERE ps.idU='$idU' " 
            //$query_result = $this->db->executeNonSelectQuery($query);
            //$_SESSION["saldo"]=$saldoAfter;PINDAHIN KE VALIDASI
            //var_dump($_FILES['bukti']);
            if($_FILES['bukti']['name']!==""){
                $fileType = strtolower(pathinfo($_FILES['bukti']['name'], PATHINFO_EXTENSION));
                if($fileType!="jpg"&&$fileType!="png"&&$fileType!="jpeg"){
                    echo " file type incorect, insert jpg, jpeg or png <br> current file type: $fileType"   ;
                    $sukses=false;
                }
                else{
                //echo $trackFileType;  
                // echo =$_FILES['gambarTrack']['name'];
                // echo "<br>";
                    $_FILES['bukti']['name']=$idT.'.'.$fileType;//nama file dijadiin id track
                    //var_dump($_FILES['bukti']);
                //echo $_FILES['gambarTrack']['name'];
                //echo "<br>";
                }
    
                $oldname1=$_FILES['bukti']['tmp_name'];
                //var_dump($oldname1);
                $newName1="view/assets/uploads/bukti/".$_FILES['bukti']['name'];// harusnya jadi view/assets/uploads/tracks/1.jpg
                //var_dump($newName1);
               //echo "success";
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