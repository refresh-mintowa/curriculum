<?php

$num = 1;

while($num <= 100){
    if($num % 3 === 0 && $num % 5 === 0){
        echo "FizzBuzz!!"."<br>";
        $num++;
    }elseif($num % 3 === 0){
        echo "Fizz!"."<br>";
        $num++;
    }elseif($num % 5 === 0){
        echo "Buzz!"."<br>";
        $num++;
    }else{
        echo $num."<br>";
        $num++;
    }
}

echo "1.パフォーマンス"."<br>";
echo "※s性能"."<br>";
echo "2.スロークエリ"."<br>";
echo "※データベースへの命令が遅いこと"."<br>";
echo "3.クエリログ"."<br>";
echo "※MySQLサーバーが実行した全てのSQLクエリを出力するログ"."<br>";
?>