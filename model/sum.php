<?php
    class Sum{
        //SUM DIPAKE UNTUK NYIMEN SUM  NOMINAL 
        protected $count;

        public function __construct($sum)
        {
            $this->sum = $sum;
        }


        public function getSum(){
            return $this->sum;
        }
       
    }
?>