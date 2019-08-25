<table border="1.5" width="100%" height="80%">
    <?php
//7.將i、j的範圍由實際數字改成文字定義
define("ROW",10);
define("COL",9);

//2.一行j個
for ($j=0;$j<=COL;$j++) {
    echo'<tr>';
    // 1.一列i個
    for ($i=1;$i<=ROW;$i++) {
        $num=$i+$j*10;//3.行列數字關係
        $isprime = true;//4.判斷質數(除1跟本身外，不能被其他小於該數的數整除)
        for ($k=2;$k<$num;$k++) {
             if ($num % $k == 0) {
                $isprime = false;
                break;
            }
        }  
        //5.定1為非質數
        if ($num == 1) {
            $isprime = false;
        }
        //6.質數上淺藍色
        if ($isprime == true) {
            echo "<td bgcolor='lightblue' style='text-align:center'>${num}</td>";
        } else {
            echo "<td style='text-align:center'>${num}</td>";
        }
    }
}
echo"</tr>";
