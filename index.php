<?php
function square($x){
    return $x*$x;
}
print <<<TITLE
<html>
<head>
<title>Тестовая вкладка</title>
</head>
<body>
TITLE;

print("Hello, ");
echo "World!<br>";
$x = date("G");
print($x );
print("<br>");
if($x >= 16 && $x<= 21) {
    print("Добрый вечер<br>");

}
for($i = 0; $i < $x; $i++){
    print"-";
}
$i=0;
print"<br>";
while ($i<10){
    print "+ $i";
    $i++;
}



print <<<FOOT
</body>
</html>
FOOT;
