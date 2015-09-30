<?php
    //print_r(glob("*.*"));
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    foreach (glob("*.*") as $filename) {
    echo "$filename size: " . filesize($filename)." Info:".finfo_file($finfo, $filename) . "</br>";
}
finfo_close($finfo);