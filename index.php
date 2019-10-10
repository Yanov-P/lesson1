<?php
include "page.php";
class main_content implements i_content
{

    function show_content()
    {
        echo "<form action=\"subarray.php\" method=\"POST\">
     <input name=\"myActionName\" type=\"submit\" value=\"Подмножества\" />
    </form>";
        echo "<form action=\"table.php\" method=\"POST\">
     <input name=\"myActionName\" type=\"submit\" value=\"Таблица простых\" />
    </form>";

    }
    function get_title()
    {
        return "Первая страница сайта";
    }
}
$page = new page(new main_content());