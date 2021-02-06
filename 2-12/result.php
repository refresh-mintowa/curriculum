<?php 
$my_name = $_POST['my_name'];
$product = $_POST['product'];
$number = $_POST['number'];
?>

<p>お名前：<?php echo $my_name; ?></p>
<p>ご希望商品：<?php echo $product;?></p>
<p>個数：<?php echo $number;?></p>


<?php
echo "1.モジュール"."<br>";
echo "※部品"."<br>";
echo "2.バージョン管理システム"."<br>";
echo "※データのバージョン管理を行うシステム"."<br>";
echo "3.サブクエリ"."<br>";
echo "※入れ子になったSQL文"."<br>";
?>