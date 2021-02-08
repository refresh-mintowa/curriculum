<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];
$q1a = $_POST['q1'];
$q1correct = $_POST['q1correct'];
$q2a = $_POST['q2'];
$q2correct = $_POST['q2correct'];
$q3a = $_POST['q3'];
$q3correct = $_POST['q3correct'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function getAnswer($a1,$a2){
    if($a1 == $a2){
        echo "正解！";
    }else{
        echo "残念";
    }
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name;?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
  echo getAnswer($q1a,$q1correct);
;?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
echo getAnswer($q2a,$q2correct);
;?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php
echo getAnswer($q3a,$q3correct);
;?>
</body>
</html>
