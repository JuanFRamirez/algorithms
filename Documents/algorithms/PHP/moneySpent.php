function getMoneySpent($keyboards, $drives, $b) {
     $spendings=[];
     $keyboards = array_filter($keyboards,function($keyboard) use($b)
     {
         return $keyboard < $b;
     });
     $drives = array_filter($drives,function($drive) use($b)
     {
         return $drive < $b;
     });

     sort($keyboards);
     sort($drives);

     if(count($drives)< 1 || count($keyboards) < 1)
     {
         return -1;
     }
     
     else if(count($keyboards) >= 1 && count($drives) >= 1)
     {  
        for($i=0;$i<count($keyboards);$i++)
        {
            for($j=0;$j<count($drives);$j++)
            {
                $spendings[]+= $keyboards[$i] + $drives[$j];
            }
        }
        return max(array_filter($spendings,function($money) use($b)
        {
            return $money <= $b;
        }));
        
     }
     else{
         return -1;
     }

}