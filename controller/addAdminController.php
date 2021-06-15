
    <?php
 require_once "controller/services/mysqlDB.php";
 require_once "view/view.php";

    class addAdminController{
        
        protected $db;

        public function __construct (){
            $this->db= new mySQLDB("localhost","root","","tugasbesar");
        }

        public function viewAll(){
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
               
                
                $query = "INSERT INTO user (idU, pass,username) 
                VALUES (7,'$password', '$username')";
                $this->db->executeNonSelectQuery($query);

                $query = "INSERT INTO admin (idU) VALUES (7)";
                $this->db->executeNonSelectQuery($query);
                
            }
        }
    }
            
                

        
         
    
