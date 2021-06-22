<?php
    class Track{
        protected $idT, $harga, $gambar, $jarak, $tema, $region,$pengikut;

        public function __construct( $idT, $harga, $gambar, $jarak, $tema, $region,$gambarMedal, $gambarBadge)
        {
            $this->idT = $idT;
            $this->harga = $harga;
            $this->gambar = $gambar;
            $this->jarak = $jarak;
            $this->tema = $tema;
            $this->region = $region;
            $this->gambarMedal = $gambarMedal;
            $this->gambarBadge = $gambarBadge;
        }

        public function getIdT(){
            return $this->idT;
        }

        public function getHarga(){
            return $this->harga;
        }
        public function getJarak(){
            return $this->jarak;
        }
        public function getGambar(){
            return $this->gambar;
        }

        public function getTema(){
            return $this->tema;
        }
        public function getRegion(){
            return $this->region;
        }
        public function getPengikut(){
            return $this->pengikut;
        }
        public function getGambarMedal(){
            return $this->gambarMedal;
        }
        public function getGambarBadge(){
            return $this->gambarBadge;
        }

    }
?>