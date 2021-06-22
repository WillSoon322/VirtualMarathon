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
            $saldo=$_SESSION["saldo"];        
            $idU=$_SESSION["idU"];
            $saldoAfter=(int) $saldo+$nominal;
            $_SESSION["saldo"]=$saldoAfter;
            $date=date("y/m/d");
            
            $query = "UPDATE peserta ps
            SET ps.saldo = '$saldoAfter'
            WHERE ps.idU='$idU' ";

            $query_result = $this->db->executeNonSelectQuery($query);
            
            $query = "INSERT INTO transaksi_top_up  VALUES (NULL,'$saldo','$saldoAfter','$nominal','$date','Belum Tervalidasi',NULL,'$idU','$method',NULL)";

            $query_result = $this->db->executeNonSelectQuery($query);
        }

        }
    
   

    
?>