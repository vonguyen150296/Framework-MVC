<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class View_Controller extends Controller
{
    public function indexAction()
    {
        $data = array(
            'title' => 'welcome to the framework PHP MVC of VO Nguyen'
        );
         
        // Load view
        $this->view->load('Example_View', $data);
         
        // Show view
        $this->view->show();
    }
}