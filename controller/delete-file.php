<?php
  $path = dirname(__FILE__).'../drive/uploads';
  if ($handle = opendir($path)) {

    while (false !== ($file = readdir($handle))) {
        if ((time()-filectime($path.'/'.$file)) < 1000) {  // 86400 = 60*60*24
          if (preg_match('/\.txt$/i', $file)) {
            unlink($path.'/'.$file);
          }
        }
    }
  }
?>