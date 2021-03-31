<?php
function callproid(){
    $DBH = connect();
    $query ="select * from product where danhmuc=1 limit 4";
    $slh = $DBH->query($query);
    return $slh;
}
function calldetailproid($proid){
    $DBH = connect();
    $query ="select * from product where id=$proid";
    $slh = $DBH->query($query);
    return $slh;
}
function calldetailproid1(){
    $DBH = connect();
    $query ="select * from product where danhmuc=1 limit 8";
    $slh = $DBH->query($query);
    return $slh;
}
function calldetailproid2(){
    $DBH = connect();
    $query ="select * from product where danhmuc=2 limit 8";
    $slh = $DBH->query($query);
    return $slh;
}
function calldetailproid3(){
    $DBH = connect();
    $query ="select * from product where danhmuc=3 limit 8";
    $slh = $DBH->query($query);
    return $slh;
}
function calldetailproid4(){
    $DBH = connect();
    $query ="select * from product where danhmuc=4 limit 8";
    $slh = $DBH->query($query);
    return $slh;
}
function callcataid($cataid){
    $DBH = connect();
    $query ="select * from product where danhmuc=$cataid";
    $slh = $DBH->query($query);
    return $slh;
}


?>