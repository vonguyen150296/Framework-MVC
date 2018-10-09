<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Library_Controller extends Controller
{
    public function indexAction()
    {
        // Loader the library example
        $this->library->load('example');
         
        // call the method 
        $this->library->example->example();
    }
}