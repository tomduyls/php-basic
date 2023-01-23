<?php 
    $my_array = ['a', 'b', 'c'];
    $other_array= [1, 2, 3];
    function exchange(&$arr1, &$arr2){
        $temp_array = array_reverse($arr1);
        $arr1 = array_reverse($arr2);
        $arr2 = $temp_array;
    }
    exchange($my_array, $other_array);
    print_r($my_array);
    print_r($other_array);
?>