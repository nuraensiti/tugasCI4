<?php 
    $a = 50;// global scope
    function myTest(){
    echo $a;//local scope
    }
    myTest();
?>
 