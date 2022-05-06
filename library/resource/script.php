<?php
// function sontroller
// 1. script('i'); 
// 2. script(); 

$opn = opendir($dir);
// 1. full exicute file in this filed
function iscript($type= null) {
        if ($type == 'm') {
            echo '<script type="module">';
        }else{
            echo '<script type="text/javascript">';
        }
        while ($file = readdir($GLOBALS['opn'])):
            if ($file < 2) {
                continue;
            }
            include $GLOBALS['dir'].$file;
        endwhile;     
        echo '</script>';
    // define mode module or javascript
  closedir($GLOBALS['opn']); 
}

// 2. only file open in this file
function scriptsrc($type = null) {
  while ($file = readdir($GLOBALS['opn'])):
      if ($file < 2) {
        continue;
      }
      if ($type == 'm') {
          echo '<script type="module" ';
      }else{
          echo '<script type="text/javascript" ';
     } 
    echo 'src="'.$GLOBALS['dir'].$file.'"></script>';
  endwhile;
// file close
closedir($GLOBALS['opn']); 
}
// oprator controller start
function script($mode = null) {
  if ($mode == 'i'):
    iscript();
  elseif($mode == 'i+'):
    iscript('m');
  elseif($mode == 'm'):
    scriptsrc('m');
  else:
    scriptsrc();
  endif;
}
// oprator controller end
?>
