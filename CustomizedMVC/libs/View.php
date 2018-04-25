<?php
class View
{
    function __construct()
    {
        //echo 'main view';
    }
    public function render($name,$noInclude = false)
    {
        require 'views/'.$name.'.php';
    }
}