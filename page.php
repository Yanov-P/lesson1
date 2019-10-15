<?php
interface i_content{
    function show_content();
    function get_title();
}

class page
{
    private $content;
    public function __construct($content)
    {
        if ($content instanceof i_content){
            $this->content = $content;
            $this->show_head();
            $this->show_menu();
            $this->show_title();
            $content->show_content();
            $this->show_footer();
        }

    }
    private function show_head(){
        ?>
        <!doctype html>
        <html lang='ru'>
        <head>
            <title >
                <?echo $this->content->get_title();?>
            </title>
            <link rel="stylesheet" type="text/css" href="style.css">
        </head><body><div class="wrapper">
        <video class="video" width="100%" height="auto" autoplay="autoplay" loop="loop" preload="auto">
            <source src="src/bgvid.mp4" type="video/mp4">
            <source src="src/bgvid.webm" type="video/webm">
        </video>
    <?  }
    private function show_title(){
        echo "<br><br><h1 class=\"title\">{$this->content->get_title()}</h1>";
    }
    private function show_menu(){
        ?>
        <div class="menu">
            <div><a href="index.php">Главная</a></div>
            <div><a href="">Пункт меню</a></div>
            <div><a href="">Пункт меню</a></div>
        </div>
    <?
    }
    private function show_footer(){
        ?>
        </div>
        </body>
        <div class="footer">
            <h4>Conceptual podval</h4>
            <h5>by Mikhail Marychev</h5>
            <a href="http://github.com/Yanov-P">github.com/Yanov-P</a>
        </div>
        <?
    }
}