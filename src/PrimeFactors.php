<?php
//Enter your code here, enjoy!
$arrayOfFactors=[];
$number = 12;
for ($i = 1; $i <= $number; $i++){
	if (isPrime($i)){
		if ($number%$i==0){
			array_push($arrayOfFactors, $i);
			$number = $number/$i;
			$i = 1;
		}
	}
}
foreach($arrayOfFactors as $item){
	echo $item . "\n";
}
function isPrime($number){
	if ($number == 1)
		return false;
	for ($i = 2; $i <= $number/2; $i++){
		if ($number % $i == 0)
			return false;
	}
	return true;
}
?>