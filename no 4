<?php
function findMedian($val) {
    $numberArray=[];
    for ($i=1;$i<=$val;$i++){
        $numberArray[] = $i;
    }

    $arrayCount = count($numberArray);
    if ($arrayCount == 0) {
        return null;
    }

    sort($numberArray);
    
    // Even number case
    if ($arrayCount % 2 == 0) {
        $medianLow = $numberArray[floor($arrayCount / 2)];
        $medianHigh = $numberArray[ceil($arrayCount / 2)]; 
        return ($medianLow + $medianHigh) / 2;
    }

    // Odd number case
    return $numberArray[$arrayCount / 2];
}
//cari nilai median(nilai tengah)


function xkebawah($val,$val2){
    for($i=1;$i<=$val;$i++){
        if($i==$val2){
            echo " x";
        }else{
            echo " =";
        }
    }
}
//ini function buat bikin = = = x = = = yah kayak gitu lah
function between($val){
    $median = findMedian($val);
    $x_kebawah = $val - 2;
    for ($i=1;$i<=$val;$i++){
        echo " x";
    }
    // for ini buat bikin x x x x x x  x di atas sama bawah


    for ($a=1;$a<=$x_kebawah;$a++){
        echo PHP_EOL;
        echo xkebawah($val,$median);

    }
    //for ini buat bikin = = = x = = = sebanyak angka yg di input

    echo PHP_EOL;//kasih enter, ibaratkan <br> kalo di html


    for ($i=1;$i<=$val;$i++){
        echo " x";
    }
    //sama kayak for yg pertama

}

echo between(5);


?>
