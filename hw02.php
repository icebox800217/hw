<?php
$poker = range(0, 51);
//1.0~51共52張牌
for ($i = 51;$i>0;$i--){//2.任意挑一張牌與最後一張做交換→$Rand[$poker] <=>$poker[$i]，每次交換完就排除最後一張，共作i次
    $Rand = rand(0,$i);//2a.0~$i中任挑一張牌
    $temp = $poker[$i]; //2b.把最後一張牌先放到暫存區
    $poker[$i] = $poker[$Rand];//2c.把挑出來的排放到最後一張
    $poker[$Rand] = $temp;//2d.把最後一張排放回挑出來的牌的原位置
       
    echo $poker[$i].'<br>';
    }