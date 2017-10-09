<?php
	//code
	
	//get input
//	$handle = fopen("php://stdin", "r");
    
   // print $handle;
	$n = 4;
	$source = "A";
	$destination = "B";
	$auxillary = "C";

    //call Hanoi
    Hanoi($n, $source, $destination, $auxillary);

	function Hanoi($n, $source, $destination, $auxillary)
	{
	    if($n > 0)
	    {
	        //move rest of the disk to auxillary
	        Hanoi($n - 1, $source, $auxillary, $destination);
	        
	        //move the last disk to destination
	        echo "Disk " . $n . " : ". $source . " --> " . $destination . "\n";
	        
	        //move rest from $auxillary to destination
	        Hanoi($n - 1, $auxillary, $destination, $source);
	    }
	    else 
	    {
	        // code...
	        return 0;
	    }
	}
?>
