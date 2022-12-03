<?php
const ELF_ROCK = "A";
const ELF_PAPER = "B";
const ELF_SCISORS = "C";

const MY_ROCK = "X";
const MY_PAPER = "Y";
const MY_SCISORS = "Z";

const FIGHT_RESULT_WIN = 6;
const FIGHT_RESULT_DRAW = 3;
const FIGHT_RESULT_LOST  = 0;

$scoreTable = [
    MY_ROCK => 1,
    MY_PAPER => 2,
    MY_SCISORS => 3,
];

$fitgtTable = [
    ELF_ROCK => [
        MY_ROCK => FIGHT_RESULT_DRAW,
        MY_PAPER => FIGHT_RESULT_WIN,
        MY_SCISORS => FIGHT_RESULT_LOST,
    ],
    ELF_PAPER => [
        MY_ROCK => FIGHT_RESULT_LOST,
        MY_PAPER => FIGHT_RESULT_DRAW,
        MY_SCISORS => FIGHT_RESULT_WIN
    ],
    ELF_SCISORS => [
        MY_ROCK => FIGHT_RESULT_WIN,
        MY_PAPER => FIGHT_RESULT_LOST,
        MY_SCISORS => FIGHT_RESULT_DRAW,
    ]
];


$data = file_get_contents('input2.txt');
$arrayData = explode(PHP_EOL,$data);


$points = 0;
foreach($arrayData as $row){
    if($row[0] === ELF_ROCK){
        $myChose = MY_PAPER;
    }
    if($row[0] === ELF_PAPER){
        $myChose = MY_ROCK;
    }
    if($row[0] === ELF_SCISORS){
        $myChose = MY_SCISORS;
    }
    $points += $scoreTable[$row[2]];
    $points += $fitgtTable[$row[0]][$row[2]];

}
echo $points;
