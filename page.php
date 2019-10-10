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
            $this->show_title();
            /*$this->show_menu();*/
            $content->show_content();
            /*$this->show_footer();*/
        }

    }
    private function show_head(){
        ?>
        <!doctype html>
        <html lang='ru'>
        <head>
            <title>
                <?echo $this->content->get_title();?>
            </title>
        </head><body>
    <?  }
    private function show_title(){
        echo "<h1>{$this->content->get_title()}</h1>";
    }
}