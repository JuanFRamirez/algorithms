<?php
// Enter your code here, enjoy!
$input='11122233aaaabbtsgcccjjggdhsgtttttTTTTTTT';
if(strlen($input) > 0 && strlen($input) <=100)
{
$input = preg_replace('/[0-9]+/', '', $input);
$letters = array_unique(str_split($input));
$count=[];
foreach($letters as $letter){
	$count[$letter] = substr_count($input,$letter);
}
print_r($count);
echo count($count) > 0 ? array_search(max($count),$count) : 0;
}
else{
	echo 0;
}