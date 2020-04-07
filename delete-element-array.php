<?php
function deleteElementArray($array, $number)
{
    $dem = 0;
    $arrayPlace = placeDeleteElementArray($array, $number);
    for ($i = 0; $i < count($arrayPlace); $i++) {
        $dem += 1;
        for ($j = $arrayPlace[$i]; $j < count($array); $j++) {
            $array[$j - $dem + 1] = $array[$j - $dem + 2];
        }
        $array[count($array) - $dem] = 0;
    }
    return $array;
}


function placeDeleteElementArray($array, $number)
{
    $arrayPlace = [];
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $number) {
            array_push($arrayPlace, $i);
        }
    }
    return $arrayPlace;
}