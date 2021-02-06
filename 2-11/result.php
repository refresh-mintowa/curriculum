<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$email = $_POST['email'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>メールアドレスは、<?php echo $email; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>



<?php
echo "1.仕様書・設計書"."<br>";
echo "※何を作るのかを説明した資料・どうやって作るのかを説明した資料"."<br>";
echo "2.Git"."<br>";
echo "※分散型バージョン管理システム"."<br>";
echo "3.マージツール"."<br>";
echo "※複数のブランチを一つにまとめて完成系に近づける"."<br>";
?>