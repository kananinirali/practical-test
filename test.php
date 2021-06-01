<?php function sum_array( $no1, $no2 ) {
  
  $array = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
	 //Insert your code here 
$count= count($array);
$sum=0;
$j=0;
if(in_array($no1,$array) && in_array($no2,$array)){
	 for($i=0;$i<$count;$i++){

	 	if($array[$i]==$no1){
	 		$j=1;
	 	}

		if($j==1){
			$sum = $sum+$array[$i];
		}
	 	

	 	if($array[$i]==$no2){
	 		$j++;
	 	}
	 }
}
 echo $sum;

}

sum_array( 10,30 );
 ?>