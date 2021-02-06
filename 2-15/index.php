<?php

echo time();
echo '<br>';
var_dump(time());
echo '<br>';

echo date("Y-m-d H:i:s",time());
echo '<br>';
echo strtotime("2017/2/16 14:20:00");
echo '<br>';
echo strtotime("last Sunday").'<br>';
echo strtotime("+2 day").'<br>';


echo "1.ログ（意味、確認の仕方）"."<br>";
echo "※コンピューターがつけている日記・記録"."<br>";
echo "2.クラウドサーバー、レンタルサーバー、VPSの違い"."<br>";
echo "※クラウドがマンションやホテル・レンタルがシェアハウス・VPSは仮想的に複数のサーバーを構築"."<br>";
echo "3.PHPのFWの種類と特徴"."<br>";
echo "※Laravel世界で一番使われている。CakePHP日本では現在でも一番使われている"."<br>";