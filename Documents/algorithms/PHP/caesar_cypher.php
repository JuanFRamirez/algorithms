<?php

/*
 * Complete the 'caesarCipher' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. STRING s
 *  2. INTEGER k
 */

function caesarCipher($s, $k) {
    // Write your code here
      $repeater = $k;
      $alphabet = str_split(str_repeat('abcdefghijklmnopqrstuvwxyz',$repeater));
      $upperAlphabet = str_split(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZ',$repeater));
    
    $strings = str_split($s);
    $newString='';
    
    foreach($strings as $key=>$val)
    {
        if(in_array($val,$upperAlphabet)){
            $find = array_search($val,$upperAlphabet);
         $newString .= $upperAlphabet[$find+$k];  
        }
        else if(in_array($val,$alphabet))
        {
            $find = array_search($val,$alphabet);
            $newString .= $alphabet[$find+$k];  
        }
        else{
           $newString .= $val;
        }
    }    
return $newString;

}


$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$s = rtrim(fgets(STDIN), "\r\n");

$k = intval(trim(fgets(STDIN)));

$result = caesarCipher($s, $k);

fwrite($fptr, $result . "\n");

fclose($fptr);
