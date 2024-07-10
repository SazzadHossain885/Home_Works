<?php
function currentBill ($light = 0, $lightNmber = 0, $fan = 0, $fanNumber = 0, $AC = 0,
 $ACNumber = 0, $frige=0, $frigeNumber=0){

    $TotalLightW =  $light * $lightNmber ; 
    $TotalFanW = $fan * $fanNumber ;
    $TotalACW = $AC * $ACNumber;
    $TotalFrigeW = $frige * $frigeNumber;

    $Total_W = $TotalLightW + $TotalFanW + $TotalACW + $TotalFrigeW;
    echo "Total Watt is $Total_W" . "<br>";

    if ( $Total_W <= 800) {
        echo "Total Bill " . $Total_W * 4.6;
    }
    else if ($Total_W >800 && $Total_W <= 1000){
        echo "Total Bill " . $Total_W * 6;
    }
    else if ($Total_W < 1000){
        echo "Total Bill " . $Total_W * 8;
    }
    else {
        echo "Your Bill Don't Count !";
    }
}
currentBill( 10, 3, 50, 6, 120, 3, 250, 3);

?>