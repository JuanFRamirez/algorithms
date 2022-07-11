<?php
$cards = [[1,2,3,4,5,4],[5,5,4,4,3,4,3],[2,2,1]];
$uniques=[];
foreach($cards as $card)
{
	$result=array_count_values($card);
	$uniques[] = $duplicated = array_keys(array_filter($result,function($i){
		return $i==1;
	}));
}

return max(array_merge(...$uniques));