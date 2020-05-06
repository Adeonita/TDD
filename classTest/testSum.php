<?php
    require_once('../class/Sum.class.php');

    class testSum{
    
        public $sum ;

        public function testSum(){
            $sum = new Sum();
            $sum->setNum1(4);
            $sum->setNum2(1);
            $num1 = $sum->getNum1();
            $num2 = $sum->getNum2();
            $tot = $sum->soma($num1, $num2);
            if($tot == 5){
                return true;
            }return false;
        }
    }
?>