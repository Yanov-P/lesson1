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
тесто
<table border="1" >
TITLE;

$sz = 15;
for($i = 0; $i < $sz; $i++){
    print("<tr>");
    for($j = 0; $j < $sz; $j++){
        print("<td>");
        print($i*$sz + $j);
        print("</td>");
    }
    print("</tr>");
}


print <<<FOOT
</table>
</body>
</html>
FOOT;
