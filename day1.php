<?php
$data = file_get_contents('input.txt');
$arrayData = explode(PHP_EOL,$data);
$maxCalories = 0;
$currentElfCallories = 0;
foreach ($arrayData as $key => $row) {
    if($row !== ''){
        $currentElfCallories += $row;
    }
    else{
        if($currentElfCallories > $maxCalories) {
            $maxCalories = $currentElfCallories;
        }
        $currentElfCallories = 0;
    }
   
}
echo '------';
var_dump($maxCalories);