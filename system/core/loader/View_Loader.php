<?php

class View_Loader
{
    /**
     * @desc param store the view that have been loaded
     */
    private $__content = array();
     
    /**
     * Load view
     * 
     * @param   string
     * @param   array
     * @desc    function load view, param is a name of view and data transmitted through view
     */
    public function load($view, $data = array()) 
    {
        // Convert the array into a variable
        extract($data);
         
        //Convert the view content to a variable instead of printing it using ob_start ()
        ob_start();
        require_once PATH_APPLICATION . '/view/' . $view . '.php';
        $content = ob_get_contents();
        ob_end_clean();
         
        // Gán nội dung vào danh sách view đã load
        $this->__content[] = $content;
    }
     
    /**
     * Show view
     * 
     * @desc    The function displays the entire view loaded, used by the controller
     */
    public function show()
    {
        foreach ($this->__content as $html){
            echo $html;
        }
    }
}

?>