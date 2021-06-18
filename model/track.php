<?php
    class Track{
        protected $idT, $harga, $gambar, $jarak, $tema, $region;

        public function __construct( $idT, $harga, $gambar, $jarak, $tema, $region)
        {
            $this->idT = $idT;
            $this->harga = $harga;
            $this->gambar = $gambar;
            $this->jarak = $jarak;
            $this->tema = $tema;
            $this->region = $region;
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

    }
?>