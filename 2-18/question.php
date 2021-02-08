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
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$q1 = [80,22,20,21];
$q2 = ['PHP','Python','JAVA','HTML'];
$q3 = ["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$q1correct = $q1[0];
$q2correct = $q2[3];
$q3correct = $q3[1];
?>
<p>お疲れ様です<!--POST通信で送られてきた名前を出力--><?php echo $my_name;?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach($q1 as $value){
    echo '<input type="radio" name="q1" value="'.$value.'">';
    echo $value;
}
;?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach($q2 as $value){
    echo '<input type="radio" name="q2" value="'.$value.'">';
    echo $value;
}
;?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
foreach($q3 as $value){
    echo '<input type="radio" name="q3" value="'.$value.'">';
    echo $value;
}
;?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="my_name" value="<?php echo $my_name;?>">
<input type="hidden" name="q1correct" value="<?php echo $q1correct;?>">
<input type="hidden" name="q2correct" value="<?php echo $q2correct;?>">
<input type="hidden" name="q3correct" value="<?php echo $q3correct;?>">
<input type="submit" value="回答する">
</form>

</body>
</html>
