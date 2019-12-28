<?php

$films=array("Fast","Predestination","Persuit","Prestige","avatar","haha");
$keyword="avatar";
for ($i=0;$i<sizeof($films);$i++){
if ($films[$i]==$keyword){
echo "yes";	
break;	
}
else if($i==sizeof($films)-1){
	echo"no";
  }
}
echo "<hr/>";
//****************************************************************************************

$films=array("avatar","Prestige","avatar","Prestige","avatar","avatar","avatar");
$keyword="avatar";
$C=0;
for ($i=0;$i<sizeof($films);$i++){
if ($films[$i]==$keyword){
$C++;
}
}
echo $C;
echo "<hr/>";

//****************************************************************************************

$films=array("avatar","Prestige","avatar","haha");

for ($i=1;$i<=sizeof($films);$i++){
	
	echo $films[sizeof($films)-$i]." ";
	
}
echo "<HR/>";
//****************************************************************************************

$tests=array(1,"tariq",1.5,true,7,'s',false);

for($i=0;$i<sizeof($tests);$i++){
	if(is_bool($tests[$i])){
			if($tests[$i] == true)
				echo "yes"." ";
			
			else if($tests[$i] == false) 
				echo"no"." ";
	}
			else echo $tests[$i]." ";
}

echo "<br/>";
//***************************************** while looping
$counter=0;
while($counter<sizeof($tests)){
	if(gettype($tests[$counter])=="boolean"){
		if($tests[$counter] == true)
				echo "yes"." ";
			
			else if($tests[$counter] == false) 
				echo"no"." ";

	}
	else{
		echo $tests[$counter]." ";
		}
				
				$counter++;

}


echo "<HR/>";
//****************************************************************************************

$tests=array(5,4,9,3,1,7,5,8,6);
$max=$tests[0];
for ($i=1;$i<sizeof($tests);$i++){
	if($max<$tests[$i])
		$max=$tests[$i];
	
}
echo $max."<hr/>";
//****************************************************************************************

$tests=array(6,4,9,3,12,8,7);
$avr=0;
for ($i=0;$i<sizeof($tests);$i++){
	$avr+=$tests[$i];
	
}
echo $avr/sizeof($tests)."<hr/>";
//****************************************************************************************



$tests=array(6,4,9,3,12,8,7);

for ($i=1;$i<sizeof($tests);$i++){
	for($j=0;$j<$i;$j++){
		if($tests[$j]>$tests[$i]){
			$temp =$tests[$j];
			$tests[$j] = $tests[$i];
			$tests[$i]= $temp;
			
		}
	}
}
for ($i=0;$i<sizeof($tests);$i++){
	echo $tests[$i]." ";

}
echo $max."<hr/>";
//****************************************************************************************

$arr1=array('a','b','c','d');
$arr2=array('c','d','e','f');

for ($i=0;$i<sizeof($arr1);$i++){
	for ($j=0;$j<sizeof($arr2);$j++){
		if($arr2[$j]==$arr1[$i]){
			echo $arr2[$j]." ";
			break;
		}
		
		
	}

}


























