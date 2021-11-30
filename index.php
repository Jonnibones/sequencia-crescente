<?php

function SequenciaCrescente($array, $element)
{

    $elemento = array_search($element, $array);
    unset($array[$elemento]);

    $new = array_values($array);

    for($i=1; $i<count($new); $i++)
    {
        if($new[$i-1] <= $new[$i]){
            $res = "true";
        }else{
            $res = "false";
        }
    }
    echo $res;
}

SequenciaCrescente([1,3,2,1], 3);



?>