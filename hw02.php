<?php
$poker = range(0, 51);
//1.0~51共52張牌
$suits = ["&spades;","<font color = 'red'>&hearts;</font>","<font color = 'red'>&diams;</font>","&clubs;"];
$values = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];//3.加上花色及數值
define("players",4);//4.發牌(人數)
for ($i = 51;$i>0;$i--) {   //2.任意挑一張牌與最後一張做交換→$poker[$Rand] <=>$poker[$i]，每次交換完就排除最後一張，共作i次
    $Rand = rand(0, $i);    //2a.0~$i中任挑一張牌
    $temp = $poker[$i];     //2b.把最後一張牌先放到暫存區
    $poker[$i] = $poker[$Rand];     //2c.把挑出來的排放到最後一張
    $poker[$Rand] = $temp;   //2d.把最後一張排放回挑出來的牌的原位置
}
?>
<table border="1">
    <?php
    for ($j = 0;$j<players;$j++) {   //4a.每人分一堆(列)牌
        echo '<tr>';
        for ($i = 0;$i<(int)(52/players);$i++) {
            $newi = $i+$j*(int)(52/players);   //4b.牌數等於總牌數除以人數(多的遺棄)
            echo'<td width="40px" height="60px" style="text-align:center">';
            echo $suits[(int)($poker[$newi]/13)];  //3a.每13張換一種花色(對應商)
            echo $values[$poker[$newi]%13];      //3b.每13張重複一次數值(對應餘數)
            echo'</td>';
        }
        echo '</tr>';
    }
