<?php

$handle = fopen ("php://stdin", "r");

function solve($a)
{
    $a_length = count($a);
    if($a_length == 1)
        return "YES";
    $flag = 0;
    
    // Complete this function
    for($i = 1; $i < $a_length - 1; $i++)
    {
 
        $left_sum = 0;
        $right_sum = 0;
        $k = $a_length;
        for($j = 0; $j < $i; $j++)
        {
            $left_sum += $a[$j];
        }
        for($k = $a_length; $k > $i; $k--)
        {
            $right_sum += $a[$k];
        }
        if($left_sum == $right_sum)
        {
            $flag = 1;
            return "YES";
        }
        else
        {
            $flag = 0;
        }
        
  
      
        //another logic
       
        
    }
    
    if($flag)
    {
        return "YES";
    }
    else
    {
        return "NO";
    }
}

fscanf($handle, "%d",$T);
for($a0 = 0; $a0 < $T; $a0++){
    fscanf($handle, "%d",$n);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    $a = array_map('intval', $a);
    $result = solve($a);
    echo $result . "\n";
}

?>

