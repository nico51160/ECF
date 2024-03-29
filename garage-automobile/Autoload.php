<?php 
session_start();
spl_autoload_register('autoload');
function autoload($className){
    $arrays_paths=array(
        'cnx/',
        'models/',
        'controllers/',
    );
    $parts=explode('\\',$className);
    $name=array_pop($parts);
    foreach($arrays_paths as $path){
        $file=sprintf($path.'%s.php',$name);
        if(is_file($file)){
            include($file);
        }
    }
}