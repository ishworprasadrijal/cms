<?php
if ($name !== NULL) {
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false);
    header("Content-Type: $mimi");
    header("Content-Disposition: attachment; filename=\"$name\";");
    header("Content-Transfer-Encoding: binary");
    if(in_array($mimi, array('image/jpg','image/jpeg', 'image/png', 'image/gif'))){
        while (ob_get_level()) {
            ob_end_clean();
        }
    }
    
    readfile($path);
} else {
    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: private", false);
    header("Content-Type: $mimi_angel");
    header("Content-Disposition: attachment; filename=\"$name_angel\";");
    header("Content-Transfer-Encoding: binary");

    readfile($path_angel);
    //echo 2 ;	
}
?>