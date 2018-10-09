<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Example_Library 
{
    public function __construct()
    {
        echo '<h3>Class Example_Library has been initialized </h3>';
    }
     
    public function example()
    {
        echo '<h3>Method Example has been called</h3>';
    }
}

?>