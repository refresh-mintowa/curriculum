<?php
$fruits = ["apple" => "りんご","orange" => "みかん","peach" => "もも"];

foreach($fruits as $key => $value){
    echo $key."といったら".$value."<br>";
}

echo "1.トランザクション"."<br>";
echo "※複数の処理を１つにまとめたもの"."<br>";
echo "2.排他ロック"."<br>";
echo "※自分は操作出来るが他人は見ることもできない"."<br>";
echo "3.チューニング"."<br>";
echo "※いい感じに調整すること"."<br>";
?>