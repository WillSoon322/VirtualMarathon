<?php
    class TrackCount{
        protected $idT, $tema, $c;

        public function __construct( $idT,$tema,$count)
        {
            $this->idT = $idT;
            $this->tema = $tema;
            $this->count=$count;
           
        }

        public function getIdT(){
            return $this->idT;
        }

        public function getTema(){
            return $this->tema;
        }
        public function getCount(){
            return $this->count;
        }
       
    }
?>