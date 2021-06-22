<?php
    class Pembayaran{
        protected $id_pembayaran, $saldo_awal,$saldo_akhir,$track_pilihan,$tanggal,$status,$idP;

        public function __construct($id_pembayaran, $saldo_awal,$saldo_akhir,$track_pilihan,$tanggal,$status,$idP)
        {
           $this->id_pembayaran=$id_pembayaran;
           $this->saldo_awal=$saldo_awal;
           $this->saldo_akhir=$saldo_akhir;
           $this->track_pilihan=$track_pilihan;
           $this->tanggal=$tanggal;
           $this->status=$status;
           $this->idP=$idP;
           
        }

        public function getIdPembayaran(){
            return $this->id_top_up;
        }

        
        public function getSaldoAwal(){
            return $this->saldo_awal;
        }

        public function getSaldoAkhir(){
            return $this->saldo_akhir;
        }

        public function getTanggal(){
            return $this->tanggal;
        }

        public function getStatus(){
            return $this->status;
        }

        public function getIdP(){
            return $this->idP;
        }

        
    }
?>