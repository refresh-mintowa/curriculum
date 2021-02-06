<?php 
$testFile = "test.txt";
$contents = "こんにちは";

if(is_writable($testFile)){

    $fp = fopen($testFile,"w");
    fwrite($fp,$contents);
    fclose($fp);
    echo "finish writable!!!<br>";
}else{
    echo "not writable";
    exit;
}

$test_file = "test2.txt";

if(is_readable($test_file)){
    $fp = fopen($test_file,"r");

    while($line = fgets($fp)){
        echo $line.'<br>';
    }
    fclose($fp);
    echo "readable";
}else {
    echo "not readable";
    exit;
}


echo "1.CakePHPの２系・３系の違い"."<br>";
echo "※学習コストはある、プラグイン周りが使えないが、拡張性はあるし新しい技術に挑戦したいかどうか"."<br>";
echo "2.LAMP"."<br>";
echo "※Linux,Apache,MySQL,PHPで構成された環境"."<br>";
echo "3.AWS"."<br>";
echo "※クラウドを使ったサービス"."<br>";