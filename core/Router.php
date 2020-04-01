<?php

class Router {

    public static function route ($url){      
        // controler
        $controler = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLER ; 
        $controler_name=$controler;
        array_shift($url);
        //action
        $action = (isset($url[0]) && $url[0] != '') ? $url[0].'Action' : 'indexAction' ; 
        $action_name=$controler;
        array_shift($url);        
        //params 
        $queryParams = $url;
        $dispach = new $controler($controler_name, $action);

        if(method_exists($controler_name,$action))
        {
            call_user_func_array([$dispach, $action], $queryParams);
        }else{
            die('Thet method das not exist in controler\"'.$controler_name .'\"');
        }


    }


}