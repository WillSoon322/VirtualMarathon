<?php
    class TopUp{
        protected $id_top_up, $saldo_awal,$saldo_akhir,$nominal,$tanggal,$status, $gambar_bukti,$idP,$jenis;

        public function __construct($id_top_up, $saldo_awal,$saldo_akhir,$nominal,$tanggal,$status, $gambar_bukti,$idP,$jenis,$nama)
        {
           $this->id_top_up=$id_top_up;
           $this->saldo_awal=$saldo_awal;
           $this->saldo_akhir=$saldo_akhir;
           $this->nominal=$nominal;
           $this->tanggal=$tanggal;
           $this->status=$status;
           $this->gambar_bukti=$gambar_bukti;
           $this->idP=$idP;
           $this->jenis=$jenis;
            $this->nama=$nama;
        }

        public function getIdTopUp(){
            return $this->id_top_up;
        }

        public function getnama(){
            return $this->nama;
        }
        
        public function getSaldoAwal(){
            return $this->saldo_awal;
        }

        public function getSaldoAkhir(){
            return $this->saldo_akhir;
        }

        public function getNominal(){
            return $this->nominal;
        }

        public function getTanggal(){
            return $this->tanggal;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getGambar(){
            return $this->gambar_bukti;
        }

        public function getIdP(){
            return $this->idP;
        }

        public function getJenis(){
            return $this->jenis;
        }
    }
?>