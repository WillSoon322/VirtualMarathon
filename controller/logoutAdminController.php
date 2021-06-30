<?php

    session_start();
    class LogoutAdminController{
        
       function logout(){
           
            unset($_SESSION["admin"]["usernameAdmin"] );
            // $_SESSION["admin"]["gambarAdmin"] = $result[0]->getGambar();
            unset($_SESSION["admin"]["loginStatusAdmin"]);
            unset($_SESSION["admin"]["idA"]);
            unset($_SESSION["admin"]);
            header("location: loginAdmin");
       }

       
        }
    
   

    
?>