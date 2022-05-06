<?php $dir =  'static/assets/css/';

function includer($a) {
   return include_once $dir.$a.'.css';
}
$cssArr = ['default','header', 'footer','subscribe'];

foreach ($cssArr as $value) {
    
    echo $value;
}
?>
