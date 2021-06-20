<?php
    class Progress{
        protected $persentase, $tema,$jarak_total,$sisa_jarak,$jarak,$idT;

        public function __construct($persentase,$tema,$jarak_total,$sisa_jarak,$jarak,$idT)
        {
           $this->persentase=$persentase;
           $this->tema=$tema;
           $this->jarak_total=$jarak_total;//jarak_total maksudnya jarak total peserta CURRENTLY
           $this->sisa_jarak=$sisa_jarak;
           $this->jarak=$jarak;//jarak itu maksudnya jarak total track yg di tabel Track
           $this->idT=$idT;
        }

        public function getTema(){
            return $this->tema;
        }

        public function getJarakTotal(){
            return $this->jarak_total;
        }

        public function getSisajarak(){
            return $this->sisa_jarak;
        }

        public function getJarak(){
            return $this->jarak;
        }

        public function getPersentase(){
            return $this->persentase;
        }

        public function getIdT(){
            return $this->idT;
        }
    }
?>