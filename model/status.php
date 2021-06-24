<?php
    class Status{
        protected $id, $nama, $track, $alamat, $status,$progress;

        public function __construct( $id, $nama, $track, $alamat, $status,$progress,$noResi)
        {
            $this->id = $id;
            $this->nama = $nama;
            $this->track = $track;
            $this->alamat = $alamat;
            $this->status = $status;
            $this->progress = $progress;
            $this->noResi=$noResi;
        }

        public function getId(){
            return $this->id;
        }

        public function getTema(){
            return $this->track;
        }
        public function getNama(){
            return $this->nama;
        }

        public function getAlamat(){
            return $this->alamat;
        }
        public function getStatus(){
            return $this->status;
        }
        public function getProgress(){
            return $this->progress;
        }
        public function getNoResi(){
            return $this->noResi;
        }
        

    }
?>