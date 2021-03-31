<?php
function getAllproduct(){
    $DBH = connect();
    $query ="select * from product";
    $slh = $DBH->query($query);
    return $slh;
}
function addproduct($ten,$chitiec,$mota,$anh,$time,$dm){
    $DBH = connect();
    $query ="INSERT INTO product( nameProduct, detailProduct, mota, img, timeUp, danhmuc) 
    VALUES ('$ten','$chitiec','$mota','$anh','$time','$dm')";
    $slh = $DBH->query($query);
    return $slh;
}
function  deleteproduct($id){
        $dbh=connect();
        $query="delete from product where id=$id";
        $sth=$dbh->exec($query);
}
function getProductid_ad($idpro){
    $dbh=connect();
    $query="SELECT * FROM product where id=$idpro ";
    $sth=$dbh->query($query);
    $row=$sth->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function  updateproduct($id,$ten,$chitiec,$mota,$anh,$time,$dm){
    $dbh=connect();
    $query="UPDATE product SET nameProduct='$ten',detailProduct='$chitiec',mota='$mota',img='$anh',timeUp='$time',danhmuc='$dm' WHERE id=$id";
    $sth=$dbh->exec($query);
}
?>