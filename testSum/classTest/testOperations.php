<?php
    require_once('../class/Sum.class.php');
    require_once('../class/sub.class.php');

    class testOperations{
    
        public $sum;
        public $sub;

        public function testSum(){
            $sum = new Sum();
            $sum->setNum1(4);
            $sum->setNum2(1);
            $num1 = $sum->getNum1();
            $num2 = $sum->getNum2();
            $result = $sum->soma($num1, $num2);
            if($result == 5){
                return 1;
            }return false;
        }

        public function testSub(){
            $sub = new Sub();
            $sub->setNum1(10);
            $sub->setNum2(2);
            $num1 = $sub->getNum1();
            $num2 = $sub->getNum2();
            $result = $sub->subtracao($num1, $num2);
            if($result == 8){
                return 1;
            }return 0;
        }
    }
?>