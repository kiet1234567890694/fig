<?php
    class homemodel{
        function __construct(){
            echo 'This is home model';
        }
        public function category(){
            return $category = array(
                'catOne'=>'Điện Thoại',
                'catTwo'=>'Điện Thoại',
                'catThree'=>'Điện Thoại',
            );
        }
    }
?>