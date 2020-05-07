<?php
    require_once('../classTest/testOperations.php');
    
    $test = new testOperations();
    
    $reflection = new ReflectionClass($test);
    $reflectionMethods =  array_column($reflection->getMethods(), 'name');

    foreach($reflectionMethods as $rM){
        if($test->$rM() == 1){
            print "Teste $rm: Bem Sucedido! <br>";
        }else{
            print "Teste $rm: Mal Sucedido! <br>";
        }
    }
  
?>