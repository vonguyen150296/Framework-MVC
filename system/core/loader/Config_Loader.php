<?php

class Config_Loader
{
    // Liste config
    protected $config = array();
     
    /**
     * Load helper
     * 
     * @param   string
     * @desc   function load helper, param is a name of helper
     */
    public function load($config)
    {
        if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')){
            $config = include_once PATH_APPLICATION . '/config/' . $config . '.php';
            if ( !empty($config) ){
                foreach ($config as $key => $item){
                    $this->config[$key] = $item;
                }
            }
            return true;
        }
        return FALSE;
    }
     
    /**
     * Get item config
     * 
     * @param   string
     * @param   string
     * @desc    function get config item, param is a name of item and param default
     */
    public function item($key, $defailt_val = '')
    {
        return isset($this->config[$key]) ? $this->config[$key] : $defailt_val;
    }
     
    /**
     * Set item config
     * 
     * @param   string
     * @param   string
     * @desc    function set config item,param is a name of item and its value
     */
    public function set_item($key, $val){
        $this->config[$key] = $val;
    }
}