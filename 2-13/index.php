<?php

echo 'ceil(切り上げ) 数値6.3　　';
$x = 6.3;
echo ceil($x).'<br>';

echo 'floor(切り捨て) 数値6.3　　';
$x = 6.3;
echo floor($x).'<br>';

echo 'round(四捨五入) 数値6.3　　';
$x = 6.3;
echo round($x).'<br>';

echo 'pi(円周率) 数値4　　';
// echo pi().'<br>';

function circleArea($r){
    $circle_area = $r * $r * pi();
    echo $circle_area;
}
circleArea(4);
echo '<br>';

echo 'mt_rand(乱数) 　　';
echo mt_rand(1,100).'<br>';

echo 'strlen(文字列の長さ) 　　';
$str = "towagarrix";
echo strlen($str).'<br>';

echo 'strpos(検索) 　　';
$str = "towagarrix";
echo strpos($str,"a").'<br>';

echo 'substr(文字列の切り取り) 　　';
$str = "towagarrix";
echo substr($str,-4,2).'<br>';

echo 'str_replace(置換) 　　';
$str = "towagarrix";
echo str_replace("wa","RA",$str).'<br>';


$name = "田中";
$limit_number = 70;
printf("%dで%sのバーゲンは終了です。",$limit_number,$name);
echo '<br>';

$price = 5000;
printf("%dで%sの%de円クーポンは終了です",$limit_number,$name,$price);
echo '<br>';

$limit_hour = 20;
$limit_minute = 5;

printf("残り%02d時間%03d分",$limit_hour,$limit_minute);

$limit_time = sprintf("残り%02d時間%03d分");
echo $limit_time;



echo "1.PostgreSQL・OracleSQL"."<br>";
echo "※オープンソースのリレーショナルデータベース"."<br>";
echo "2.TortoiseGit・TortoiseSVN"."<br>";
echo "※Gitをより扱いや数するためのwindowsようソフトウェア"."<br>";
echo "3.外部設計・内部設計"."<br>";
echo "※基本設計で要件定義と詳細設計をつなぐもの・詳細設計のことで実際のプログラムが組めるように落とし込む"."<br>";
?>