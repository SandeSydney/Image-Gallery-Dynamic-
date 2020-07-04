<?php

//class for the page data
class Page_Data
{
    public $title = "";
    public $content = "";
    public $css = "";
    public $embeddedStyle = "";

    //stylesheets reuse object method
    public function addCSS($href){
        $this->css .= "<link href='$href' rel='stylesheet'>";
    }
}
