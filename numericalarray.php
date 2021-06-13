<?php
//numerical array 
	//method1
	$a[0]=10;
	$a[1]=20;
	$a[2]=20.30;
	$a[3]="c";
	$a[4]="1";
	
	//method2 dynamic array
	$a[]=10;
	$a[]=20;
	$a[]=20.30;
	$a[]="c";
	$a[]="1";
	
	//method3
	$a = array (10,20,"d","c++",20.30);
	
	//print the array value
	//echo $a=[2];
	
	//print whole array
	for($i=0;$i<count($a);$i++){
		echo "<br/>".$a[$i];
	}
	
	//sum array
	$sum=array_sum($a);
	echo "<br>Sum is:".$sum;
	
	//3 inbuit to debug program
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	var_dump($a);

?>