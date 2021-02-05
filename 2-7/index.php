<?php
$color = ["red" => "赤", "blue" =>"青", "grenn" => "緑"];

var_dump($color);

$color["yellow"] = "黄";
echo "<br>";
var_dump($color);


echo "1.プルリクエスト"."<br>";
echo "※他の開発者が機能追加や改修をした時にその場所を通知してくれる"."<br>";
echo "2.Git Flow"."<br>";
echo "※gitの機能であり、ツールの名前、複数人の大規模開発で使う"."<br>";
echo "3.CRON"."<br>";
echo "※Linuxサーバーの管理で何をいつ実行するのかを決め、そのルールを書き込むこと"."<br>";
?>