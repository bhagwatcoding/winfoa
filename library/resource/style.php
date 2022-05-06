<?php
$opn = opendir($dir);

// 1. full exicute file in this filed
function istyle() {
  echo '<style type="text/css">';
  while ($file = readdir($GLOBALS['opn'])):
    if ($file < 2) {
      continue;
    }
    include $GLOBALS['dir'].$file;
  endwhile;  
  echo '</style>';
  closedir($GLOBALS['opn']); 
}
// 2. only file open in this file
function linkstyle() {
  while ($file = readdir($GLOBALS['opn'])):
      if ($file < 2) {
        continue;
      }
    echo '<link rel="stylesheet" type="text/css"  src="'.$GLOBALS['dir'].$file.'">';
  endwhile;
// file close
closedir($GLOBALS['opn']); 
}
// oprator controller start
function style($mode = null) {
  if ($mode == 'i'):
    istyle();
  else:
    linkstyle();
  endif;
}
// oprator controller end

?>