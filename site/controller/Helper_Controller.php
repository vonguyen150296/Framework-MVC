<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Helper_Controller extends Controller
{
    public function indexAction()
    {
        // Load heloer
        $this->helper->load('example');
         
        // Call the function  string_to_int
        echo string_to_int('vonguyen');
    }
}

?>