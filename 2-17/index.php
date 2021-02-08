<?php
// $i = mt_rand(1,6);
$num = 1;

// if($total < 40){
//     while($total < 40){
//         $i = mt_rand(1,6);
//         echo $num."回目に出た数字は".$i."<br>";
//         $num++;
//        $total = $total + $i;
//     }
//    echo "合計".$num."回でゴールしました";
// }else {
//     echo "合計".$num."回でゴールしました";
// }

if($total < 40){
    while($total < 40){
        $i = mt_rand(1,6);
        echo $num."回目に出た数字は".$i."<br>";
        $num++;
       $total = $total + $i;

        // if($total < 40){
        // }
    }
    $last = $num - 1;
   echo "合計".$last."回でゴールしました<br><br>";
}

date_default_timezone_set('Asia/Tokyo');

$datetime = date("H",time());
$morning = 4 < $datetime && $datetime <= 12;
$lunch = 12 < $datetime && $datetime <= 17;
$dinner = 17 < $datetime || $datetime <= 4;

echo "今は".$datetime."時台です。<br>";
if($morning){
    echo "おはようございます";
}elseif ($lunch){
    echo "こんにちは";
}else{
    echo "こんばんは";
}
// echo date("今H時台です",time());
