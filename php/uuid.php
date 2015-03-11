<?php
function uuid(){
    $charid = strtoupper(md5(uniqid(rand(), true)));
    /*
     * $hyphen = chr(45);// "-"
     * $uuid = substr($charid, 0, 8).$hyphen
     *         .substr($charid, 8, 4).$hyphen
     *         .substr($charid,12, 4).$hyphen
     *         .substr($charid,16, 4).$hyphen
     *         .substr($charid,20,12);
     */
    $uuid = substr($charid, 0, 8)
            .substr($charid, 8, 4)
            .substr($charid,12, 4)
            .substr($charid,16, 4)
            .substr($charid,20,12);
    return $uuid;
}
echo guid();
?>
