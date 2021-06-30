<?php
    class Pemilik{
        protected $idA, $username, $password, $gambar;

        public function __construct($idU, $username, $password, $gambar)
        {
            $this->idU=$idU;
            $this->username=$username;
            $this->password=$password;
            $this->gambar=$gambar;
        }

        public function getIdU(){
            return $this->idU;
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