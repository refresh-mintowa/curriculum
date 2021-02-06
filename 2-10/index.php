<?php
function getVolume($base,$height,$depth){
    $volume = $base * $height * $depth;
    echo "直方体の体積は".$volume."です"."<br>";
}

getVolume(10,8,5);

echo "1.ハッシュ化"."<br>";
echo "※ルールに基づき、別の値に置き換えること"."<br>";
echo "2.統合テスト"."<br>";
echo "※手続きや関数といったここの機能を結合させてうまく連動・動作しているか確認するテスト"."<br>";
echo "3.デバッグ"."<br>";
echo "※バグを見つけそれらを排除する作業のこと"."<br>";
?>