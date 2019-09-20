<?php
function square($x){
    return $x*$x;
}
print <<<TITLE
<html>
<head>
<title>Таблица простых чисел</title>
</head>
<body>
Таблица простых чисел до 
<table border="1" align="center" >
<tr>
TITLE;

$maxnum = 1000;
$maxinrow = 20;
print("$maxnum по $maxinrow в строку");

$prostCount = 0;
$rowpos=0;
$num = 2;
while ($prostCount < $maxnum){
    $found = true;
    for($n = 2; $n < sqrt($num); $n++){
     if($num%$n == 0){
         $found = false;
         break;
     }
    }
    if($found == true){
        $prostCount++;

        print("<td>");
        print"$num";
        print("</td>");
        if($prostCount%$maxinrow == 0){
            print("</tr>");
            print("<tr>");
        }
    }
    $num++;
}

//$sz = 15;
//for($i = 0; $i < $sz; $i++){
//    print("<tr>");
//    for($j = 0; $j < $sz; $j++){
//        print("<td>");
//        print($i*$sz + $j);
//        print("</td>");
//    }
//    print("</tr>");
//}


print <<<FOOT
</tr>
</table>
</body>
</html>
FOOT;
