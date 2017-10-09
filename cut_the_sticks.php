<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');
//print_r ($arr);

//doing part
$array_length = count($arr);
$sticks_cut = $array_length;
while($sticks_cut > 0)
{
    $small = 0;
    //get the smallest element
    for($i = 0; $i < $array_length; $i++)
    {
        if($arr[$i] != 0)
        {
            if($arr[$i] < $small)
            {
                $small = $arr[$i];
            }
            
            //change value of small if it's zero
            if($small == 0)
            {
                $small = $arr[$i];
            }
        }
    }
    
    //get the cut value
    $length_of_cut = $small;
    
    //cut!
    //use a track variable
    $track = 0;
    for($i = 0; $i < $array_length; $i++)
    {
        if($arr[$i] > 0)
        {
            $track++;
            $arr[$i] -= $length_of_cut;
        }
    }
    
    if($track == 0)
    {
        break;
    }
     
    $sticks_cut = $track;
    print $sticks_cut . "\n";
}

?>

