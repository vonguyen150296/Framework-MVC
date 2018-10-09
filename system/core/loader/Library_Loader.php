<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');

class Library_Loader
{
    /**
     * Load library
     * 
     * @param   string
     * @param   array
     * @desc    function load library, param is a name of library and liste of param 
     * in the function contruct (if then)
     */
    public function load($library, $agrs = array())
    {
        // if the library does not loader, loader the library
        if ( empty($this->{$library}) )
        {
            // uppercase the first character and add suffix _Library
            $class = ucfirst($library) . '_Library';
            require_once(PATH_SYSTEM . '/library/' . $class . '.php');
            $this->{$library} = new $class($agrs);
        }
    }
}