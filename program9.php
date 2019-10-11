<?php
$allstates = "Mississipi Alabama Texas Massachusetts Kansas";
$states =[];
$states1 = explode(' ' , $allstates);
$i=0;
foreach ($states1 as $state ){
	if(preg_match( '/xas$/' ,($state)))
	{
		$states[$i] = $state;
		$i++;
		echo "The states that end with xas: " .$state. "<br/>";
	}	
}	
foreach ($states1 as $state ){
	if(preg_match( '/^k.*s$/i' ,($state)))
	{
		$states[$i] = ($state);
		$i++;
		echo "The states that begins with k and end with s: " .$state. "<br/>";
	}	
}	
foreach ($states1 as $state ){
	if(preg_match( '/^M.*s$/' ,($state)))
	{
		$states[$i] = ($state);
		$i++;
		echo "The states that begins with M and end with s: " .$state. "<br/>";
	}	
}	
foreach ($states1 as $state ){
	if(preg_match( '/a$/' ,($state)))
	{
		$states[$i] = ($state);
		$i++;
		echo "The states that ends with a: " .$state . "<br/>";
	}	
}	
foreach ($states1 as $element => $value ){
	print("\n" . $value . " is the element" . $element);
}	
?>
