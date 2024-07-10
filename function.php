<?php 

// 1 w = 4.6;
// 1 light = 10 w (5)
// 1 fan = 150 w (3)
// 1 Frige = 200 w (1)
// 1 AC = 250 w (2)


function currentBill ($lightW=0, $lightNmber=0, $fanW=0,$fanNumber=0, $frige=0, $frigeNumber=0,
 $AC =0, $ACNumber=0, $perWBill= 0){

	$TotalLigthW = $lightNmber * $lightW;
	$TotalFanW = $fanNumber * $fanW ;
	$TotalFrigeW = $frigeNumber * $frige ;
	$TotalACW = $ACNumber * $AC ;

	$TotalW = $TotalLigthW + $TotalFanW + $TotalFrigeW + $TotalACW ;

	$Bill = $TotalW * $perWBill ;
	echo "Total Bill $Bill ";

}

currentBill(10, 5, 150, 3, 200, 1, 250, 2, 4.6);

?>