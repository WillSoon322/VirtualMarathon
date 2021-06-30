<?php

    session_start();
    class LogoutPemilikController{
        
       function logout(){
          unset($_SESSION["pemilik"]["usernamePemilik"]);
          //$_SESSION["pemilik"]["gambarPemilik"] = $result[0]->getGambar();
          unset($_SESSION["pemilik"]["loginStatusPemilik"]);
          unset($_SESSION["pemilik"]["idPemilik"]);
          unset($_SESSION["pemilik"]);
          header("location: loginPemilik");
       }

       
        }
    
   

    
?>