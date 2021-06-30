<?php
    class Count{
        //COUNT DIPAKE UNTUK NYIMPEN BANYAK PESERTA DALAM KATEGORI TERTENTU (USIA< GENDER DLL)
        protected $count;

        public function __construct($count)
        {
            $this->count = $count;
        }


        public function getCount(){
            return $this->count;
        }
       
    }
?>