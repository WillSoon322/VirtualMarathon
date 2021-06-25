<?php
    class Medal{
        protected $idM, $status, $idT, $idP,$noResi;

        public function __construct($idM, $status, $idT, $idP,$noResi)
        {
            $this->idM=$idM;
            $this->status=$status;
            $this->idT=$idT;
            $this->idP=$idP;
            $this->noResi=$noResi;
        }

        public function getIdM(){
            return $this->idM;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getIdT(){
            return $this->password;
        }

        public function getIdP(){
            return $this->idP;
        }

        public function getNoResi(){
            return $this->noResi;
        }
    }
?>