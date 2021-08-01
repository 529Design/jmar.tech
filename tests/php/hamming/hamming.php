<?php

/*
This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
convenience to get you started writing code faster.

Remove this comment before submitting your exercise.
*/
$f = 'A';
$g = 'A';

function distance(string $strandA, string $strandB) : int
{
    $hamDistance = 0;

    if (strlen($strandA) != (strlen($strandB))){
        //echo "DNA strands must be of equal length.";
        throw new InvalidArgumentException("DNA strands must be of equal length.");
    }
    else{
        for ($i = 0; $i < strlen($strandA); $i++){
            if($strandA[$i] != $strandB[$i]){
                $hamDistance += 1;
            }
        }
    }
    //print_r($hamDistance);
    return intval($hamDistance);
}

//distance($f, $g);
//echo "test";
//distance();intval()