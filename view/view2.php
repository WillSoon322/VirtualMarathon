<?php 
    class View2 {
        public static function createView ($view , $param){
            //looping satu per satu elemen di array "parameter" di viewAll
            //nanti dapet setiap elemen oisinya key dan value
            foreach ($param as $key=>$value){
                $$key=$value;//$$key nanti rubah nama jadi $'nama key di elemen'
            }

            //semua yg ada di dalem ob_start dan ob_clean gabakal di execute dulu
            ob_start();//inclue gituan di taro dalem ob_start biar ga ke output
            include 'view/'.$view; //include view/ halaman apapun yg jadi param
            $content = ob_get_contents();//content di echo nya di layout
            ob_end_clean();

            ob_start();
            include 'view/layout/layout2.php';//tinggal salin layout, setelah menyalin content
            //var_dump($param);
            $include=ob_get_contents();
            ob_end_clean();

            return $include;//berisi html yg sudah FINAL
            //include di return ke controller, dan controller return ke router
            //router meng output dengan echo
        }
    }
?>