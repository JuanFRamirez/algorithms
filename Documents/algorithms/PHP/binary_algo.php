<?php
// Enter your code here, enjoy!
class Binary{
	public function printBinary($num){
		$i=0;
		$j=0;
		$k=2;
		$binaries=[];
		while($i < $num)
		{
			if($i==$j)
			{
				$binaries[]=0;
				$j=$j+$k;
				$k++;
			}
			else{
				$binaries[]=1;
			}
			$i++;
		}
		print_r($binaries);
	}
}
$object = new Binary();
$object->printBinary(14);