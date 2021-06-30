
    <?php
 require_once "controller/services/mysqlDB.php";
 require_once "controller/view/view.php";

    class addAdminController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
            //var_dump($_SESSION["pemilik"]["loginStatusPemilik"]);
            // if(isset($_SESSION["pemilik"]["loginStatusPemilik"])==false){
            //     header("location: loginPemilik");
            // }
            return View::createView("addAdmin.php",[]);
    
        }

        public function addAdmin(){
            //var_dump($_POST);
            $username = $_POST['username'];
            $password = $_POST['password'];
           


            if( isset($username) && $username != "" 
            &&
                isset($password) && $password != ""
           
            ){
                
                
                $username = $this->db->escapeString($username);
                $password = $this->db->escapeString($password);
               
                
                $query = "INSERT INTO user 
                VALUES (NULL,'$password', '$username',NULL)";
                $this->db->executeNonSelectQuery($query);

                $query="SELECT idU from user WHERE username='$username'";
                $tempId=$this->db->executeSelectQuery($query);
                var_dump($tempId);
                $idU=0+$tempId[0]["idU"];
                var_dump($idU);

                $query = "INSERT INTO admin VALUES ('$idU')";
                $this->db->executeNonSelectQuery($query);
                
            }
        }
    }
            
                

        
         
    
