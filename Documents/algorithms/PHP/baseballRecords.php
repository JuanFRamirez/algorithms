<?php
// Enter your code here, enjoy!
$array = array("5","2","C","D");

$records=[];

for($i=0;$i<count($array);$i++)
{
	if($array[$i]=="C")
	{
		array_splice($records,1,1);
	}
	else if($array[$i]=="D")
	{
		$lastNumber = $array[count($records)-1];
		$records[]+=$lastNumber * $lastNumber;
	}
	else{
		$records[]+=$array[$i];
	}
}
echo array_sum($records);