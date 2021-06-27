<?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view2.php";

 session_start();
    class DeleteController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            return View2::createView("delete.php",[]);
    
        }

        function delete(){
            
            if(isset($_SESSION["idU"])){
                $idU= $_SESSION["idU"];
            }
           else{
               echo "no idu";
           }
            var_dump($idU);
           
            $query="UPDATE peserta SET deleted=1 WHERE idU='$idU' ";
            $query_result = $this->db->executeNonSelectQuery($query);
            session_destroy();

        }
        }
    
        // $value["idU"],$value["no_telepon"],$value["email"],$value["jarak"]
        // ,$value["tema"],$value["region"]

    
?>
