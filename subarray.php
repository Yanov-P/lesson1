<?php
include "page.php";

function show_sub_arrays($maxnum = 10, $debug = false){
    $a = array();
//    for($n = 1; $n < $maxnum + 1; $n++){
//        $a[$n] = $n;
//    }

    for($n = 0; $n < $maxnum ; $n++){
        $a[$n] = $n;
        print($a[$n]);
        print(" ");
    }
    print("<br/>");

    $maxpow=1;
    for($i=0; $i < $maxnum; $i++)
        $maxpow *= 2;

    $count = 1;
    for($i=0; $i < $maxpow; $i++)
    {
        for($j=0; $j < $maxnum; $j++)
            if (($i >> $j) & 1) {
                print($a[$j]);
                print(" ");
                if($debug){
                    print("j=");
                    print($j);
                    print(" ");
                }
            }
        if($debug){
            print(" count = ");
            print($count);
            $count++;
            print(" i = ");
            print($i);
            print(" m = ");
            print($maxpow);
        }
        print("<br/>");
    }
    return;
}

class subarray_content implements i_content
{
    function show_content()
    {
        show_sub_arrays(5);
    }
    function get_title()
    {
        return "Подмножества множества";
    }
}
$page = new page(new subarray_content());