<?php
function show_simple_numbers_table($maxnum = 1000, $maxinrow = 20){
print<<<TABLE
Таблица простых чисел до $maxnum по $maxinrow в строку
<table border="1" align="center" >
<tr>
TABLE;
//amount of found simple numbers
    $prostCount = 0;
//a number which simplicity is checking
    $num = 2;
    while ($prostCount < $maxnum){
        //true if simple number found
        $found = true;
        for($n = 2; $n < sqrt($num); $n++){
            if($num%$n == 0){
                //not a simple
                $found = false;
                break;
            }
        }
        //printing to table if simple
        if($found == true){
            $prostCount++;
            print("<td>");
            print"$num";
            print("</td>");
            //start new row if end is reached
            if($prostCount%$maxinrow == 0){
                print("</tr>");
                print("<tr>");
            }
        }
        $num++;
    }

    print<<<ENDTABLE
</tr>
</table>
ENDTABLE;
return;
}

function show_mnojestvo($maxnum = 10){
    $a = array();
    for($n = 1; $n < $maxnum; $n++){
        $a[$n] = $n;
    }

    for($n = 1; $n < $maxnum; $n++){
        $a[$n] = $n;
    }

    $i = 0;
    $mx = 1;
    $j = 0;

    for($i=0, $mx=1; $i < $maxnum; $i++)
        $mx *= 2;  // Вместо pow(2, N)
    for($i=0; $i < $mx; $i++)
     {
         for($j=0; $j < $maxnum; $j++)
       if (($i >> $j) & 1) print($a[$j] );
         print("<br/>");
     }

    return;
}

print <<<TITLE
<html>
<head>
<title>Таблица простых чисел</title>
</head>
<body>
TITLE;

//show_simple_numbers_table(500,13);
show_mnojestvo();


print <<<FOOT
</body>
</html>
FOOT;
