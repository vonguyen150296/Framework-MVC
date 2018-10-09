<?php if ( ! defined('PATH_SYSTEM')) die ('Bad requested!');
/**
 * function run application
 */
function Load()
{
    // Get the initial initialization config
    $config = include_once PATH_APPLICATION . '/config/init.php';
 
    // If you do not transmit the controller then get the default controller
    $controller = empty($_GET['c']) ? $config['default_controller'] : $_GET['c'];
 
    // If you do not transmit the action then get the default action
    $action = empty($_GET['a']) ? $config['default_action'] : $_GET['a'];
 
    // Converts the controller name because it has the format {Name} _Controller
    $controller = ucfirst(strtolower($controller)) . '_Controller';
 
    // Converts the action name because it has the format {name}Action
    $action = strtolower($action) . 'Action';
     
    // verify file controller is exist or not
    if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')){
        die ('Not found controller');
    }
     
    // Include the main controller for its child controllers
    include_once PATH_SYSTEM . '/core/Controller.php';
     
    // Call the file controller
    require_once PATH_APPLICATION . '/controller/' . $controller . '.php';
 
    // Verify the class controller is exist or not
    if (!class_exists($controller)){
        die ('Not found controller');
    }
 
    // Initialization controller
    $controllerObject = new $controller();
 
    // verify the action is exist or not
    if ( !method_exists($controllerObject, $action)){
        die ('Not found action');
    }
     
    // Run application
    $controllerObject->{$action}();
}


?>