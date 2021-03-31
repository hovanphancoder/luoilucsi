<?php
function callallcata(){
    $DBH = connect();
    $query ="select * from danhmuc ";
    $slh = $DBH->query($query);
    return $slh;
}
function callnamecata($cataid){
    $DBH = connect();
    $query ="select * from danhmuc where id= $cataid";
    $slh = $DBH->query($query);
    return $slh;
}
?>