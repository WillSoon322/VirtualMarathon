<?php
    class Admin{
        protected $idA, $username, $password, $gambar;

        public function __construct($idA, $username, $password, $gambar)
        {
            $this->idU=$idA;
            $this->username=$username;
            $this->password=$password;
            $this->gambar=$gambar;
        }

        public function getIdA(){
            return $this->idA;
        }

        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }

        public function getGambar(){
            return $this->gambar;
        }
    }
?>