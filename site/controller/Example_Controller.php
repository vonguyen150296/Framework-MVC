<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
 
class Example_Controller extends Controller
{
    public function indexAction()
    {
       // get csrf_token_name
        echo '<h3>Token: csrf_token_name: ' . $this->config->item('csrf_token_name') . '</h3>';
         
        // changer the value of csrf_token_name
        $this->config->set_item('csrf_token_name', 'new_token');
        echo '<h3>Token: csrf_token_name (changed): ' . $this->config->item('csrf_token_name') . '</h3>';
         
        // create a new website_name
        $this->config->set_item('website_name', 'vonguyen.com');
        echo '<h3>key website_name: ' . $this->config->item('website_name') . '</h3>';
    }
     
    public function detailAction()
    {
        echo '<h1>Detail Action</h1>';
    }
}