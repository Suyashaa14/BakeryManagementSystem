<?php
$dirname = "product";
$images = scandir($dirname);
$ignore = Array(".", "..");
foreach($images as $curimg){
    if(!in_array($curimg, $ignore)) {
        echo "<img src='produs/$curimg' /><br>\n";
    }
}

?>