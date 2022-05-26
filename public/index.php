<?php
    define('DS',DIRECTORY_SEPARATOR);
    define('ROOT_PATH',dirname(__DIR__).DS);
    define('APP',ROOT_PATH.'app'.DS);
    define('VIEWS',APP.'views'.DS);
    define('CORE',APP.'core'.DS);
    define('CONTROLLERS',APP.'controllers'.DS);
    define('CONFIG',APP.'config'.DS);
    define('MODELS',APP.'models'.DS);
    require_once CONFIG.'config.php';
    require_once CONFIG.'helpers.php';
    $modules = [ROOT_PATH,APP,CORE,VIEWS,CONTROLLERS,MODELS,CONFIG];
    set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
    spl_autoload_register('spl_autoload');




    new App();
    
?>

