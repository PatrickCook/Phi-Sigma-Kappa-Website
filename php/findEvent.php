<?php
$event = strval($_GET['evt']);
$path = sprintf("/res/'%s'", event);
//define directory
$dir = "../res/$event";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            if (!is_dir($dir.$file)) {
                 echo "<img src='res/$file'><br />";
            }
        }
        closedir($dh);
    }
}

?>
