<?php
$dir = "static/assets/css/";
$opn = opendir($dir);

// 1. full exicute file in this filed
function istyle() {
  while ($file = readdir($GLOBALS['opn'])):
      if ($file < 2) {
        continue;
      }
    include $GLOBALS['dir'].$file;
  endwhile;  
  closedir($GLOBALS['opn']); 
}

// 2. only file open in this file
function linkstyle() {
  while ($file = readdir($GLOBALS['opn'])):
      if ($file < 2) {
        continue;
      }
    echo '<link type="text/css" src="'.$GLOBALS['dir'].$file.'"></link>';
  endwhile;
// file close
closedir($GLOBALS['opn']); 
}

function style($mode = null) {
  if ($mode == 'i'):
      istyle();
  else:
    linkstyle();
  endif;
  }

style('i');

?>