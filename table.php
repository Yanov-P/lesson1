<?php
include "page.php";
function show_simple_numbers_table($maxnum = 1000, $maxinrow = 20){
print<<<TABLE
<table >
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

class table_content implements i_content
{
    function show_content()
    {
        show_simple_numbers_table();
    }
    function get_title()
    {
        return "Таблица простых чисел";
    }
}
$page = new page(new table_content());
