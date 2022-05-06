<?php 
$assetsDir = 'static/assets/';
// style loop 
function style($arr) {
    foreach ($arr as $e) {
        echo '<link type="text/css" src="'.$GLOBALS['assetsDir'].'css/'.$e.'.css"></link>';
    }
}
// style include
function includeStyle($arr) {
    echo '<style type="text/css">';
    foreach ($arr as $e) {
        include $GLOBALS['assetsDir'].'css/'.$e.'.css';
    }
    echo '</style>';
}

// script loop
function script($arr, $type = null) {
    function type($e, $m) {
        return '<script type="'.$m.'" src="'.$GLOBALS['assetsDir'].'js/'.$e.'.js"></script>';
    }
    foreach ($arr as $e) {
        if ($type == null) {
            echo type($e, "text/javascript");
        } elseif($type === "m") {
            echo type($e, "module");
        }
    }
}




?>