<?php
    class Peserta{
        protected $idU,  $no_telepon, $email, $nama, $Gender,$kota, $Alamat,$usia,$saldo,$idA;

        public function __construct( $idU, $no_telepon, $email, $nama, $Gender,$kota, $Alamat,$usia,$saldo,$idA)
        {
            $this->idU = $idU;
            $this->no_telepon = $no_telepon;
            $this->email = $email;
            $this->nama = $nama;
            $this->Gender = $Gender;
            $this->kota = $kota;
            $this->Alamat = $Alamat;
            $this->usia = $usia;
            $this->saldo = $saldo;
            $this->idA = $idA;
        }

        public function getIdU(){
            return $this->idU;
        }

        public function getTelepon(){
            return $this->no_telepon;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getNama(){
            return $this->nama;
        }

        public function getGender(){
            return $this->Gender;
        }
        public function getKota(){
            return $this->kota;
        }
        public function getAlamat(){
            return $this->Alamat;
        }
        public function getSaldo(){
            return $this->saldo;
        }
        public function getUsia(){
            return $this->usia;
        }
        public function getIdA(){
            return $this->idA;
        }

    }
?>