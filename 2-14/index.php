<?php
$members = ["tanaka","sasaki","takahashi","suzuki","katou"];
echo count($members).'<br>';

sort($members);
var_dump($members);
echo '<br>';

var_dump(in_array("tanaka",$members));
echo '<br>';

if(in_array("tanaka",$members)){
    echo '田中さんがいる！<br>';
}else{
    echo '田中さんがいない';
}
$atstr = implode($members);
echo $atstr.'<br>';

$atstr = implode("@",$members);
var_dump($atstr);
echo '<br>';

$re_members = explode("@",$atstr);
var_dump($re_members);
echo '<br>';

$str = "1,2,3,4,5";
$array = explode(",",$str);
var_dump($array);
echo '<br>';



echo "1.要件定義"."<br>";
echo "※システム開発にこんな機能が欲しいということをまとめる工程"."<br>";
echo "2.単体テスト・結合テスト"."<br>";
echo "※単体機能でのテスト・機能間や他システム間におけるテスト"."<br>";
echo "3.テスト仕様書（どのようなもの、項目）"."<br>";
echo "※要件定義書の通りに機能するかどうかテストするポイントをまとめたドキュメントkk"."<br>";

?>