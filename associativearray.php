<?php
	//key=value
	//method 1
	$a[0]=10;
	$a['d']="computer";
	$a['php']="Web development";
	$a[10]="ten";
	$a[50]=50.50;
	
	//method 2
	$a=array(
		0=>10,
		"c"=>"computer",
		"php"=>"web development",
		10=>"ten",
		50=>50.50,
	);
	echo "C for".$a['c'];
	
	foreach($a as $value){
		echo "<br>Value is".$value;
	}
	
	foreach($a as $key=>$value){
		echo "<br>key is <b>$key</b> and <br>Value is <b>$value</b>";
	}
	
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	var_dump($a);
?>