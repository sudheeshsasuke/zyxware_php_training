<?php
$handle = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

//take the first line of input
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$n = $arr[0];
$k = $arr[1];

//process the second line of input
$arr_temp_1 = fgets($handle);
$values = explode(" ",$arr_temp_1);
array_walk($values,'intval');

// echo $arr[0]. " " . $arr[1] . "\n" . $arr_1;

$temp = array();
//array_push($temp, $values[0]);
//
//take the modulas values of individual elements
for ($i = 0; $i < $n; $i++) {
    $temp[$i] = $values[$i] % $k;
}

//process

//print_r($temp);
$new_temp = array_count_values($temp);

for ($i = 0; $i < $k; $i++) {
    
    if(empty($new_temp[$i])) {
      $new_temp[$i] = 0;
    }
}
//print_r($new_temp);
$count = 0;



if($new_temp[0] > 0)
{
    $count++;
}
if($k%2 == 0 && $new_temp[$k/2] > 0)
{
    $count++;
}


foreach ($new_temp as $key => $val) {
/*
    if($key == 0 && $val > 0){
        $count += 1;
    }
    elseif($key == ($k - $key))
    {
            $count += 1;
    }
 */
    if($key > 0 && $key < ($k / 2))
    {
        if($val > $new_temp[$k - $key]) {
            $count += $val;
        }
        else{
            $count += $new_temp[$k - $key];
        }
    }
}

/*
* working code in normal for loop
*
*
for($i = 1; $i < $k/2; $i++)
{
    if($new_temp[$i] > $new_temp[$k - $i]) {
            $count += $new_temp[$i];
        }
        else {
            $count += $new_temp[$k - $i];
        }
}
*/
echo $count;

?>
