<?php

if (! function_exists('page_title')) {
    function page_title($title){
        $base_title =  config('app.name');
        if ($title === '') {
            return $base_title;
        } else {
            return $title;
        }
        
    } 
}

if (! function_exists('set_active_route')) {
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
        
    } 
}


if (! function_exists('set_aside_title')) {
    function set_aside_title($route){
        // return Route::is($route) ? 'active' : '';
        if (Route::is('root_path')) {
            return 'Accueil';
        }
        
    } 
}