<?php
if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    // serve the requested file directly
    return false;
} else {
    // internally redirect all other requests to the corresponding .html file
    include_once("$_SERVER[DOCUMENT_ROOT]$_SERVER[REQUEST_URI].html");
}
?>
