<?php
function searchProduct($keysearch){
    $DBH = connect();
    $query ="SELECT * FROM product WHERE nameProduct LIKE '%$keysearch%'" ;
    $slh = $DBH->query($query);
    return $slh;
}
?>