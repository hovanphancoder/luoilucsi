<?php
function getAllcata_ad(){
    $DBH = connect();
    $query ="select * from danhmuc";
    $slh = $DBH->query($query);
    return $slh;
}

function getcataid_ad($idcata){
    $dbh=connect();
    $query="SELECT * FROM danhmuc where id=$idcata ";
    $sth=$dbh->query($query);
    $row=$sth->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function addcata($tencata){
    $DBH = connect();
    $query="insert into danhmuc(tendanhmuc) values ('$tencata')";
    $slh = $DBH->query($query);
    return $slh;
}

function deletecata($idcata){
    $dbh=connect();
    $query="delete from danhmuc where id=$idcata";
    $sth=$dbh->exec($query);
}

function updatecata($tencata,$idcata){
    $dbh=connect();
    $query="update danhmuc set tendanhmuc='$tencata' where id='$idcata'";
    $sth=$dbh->exec($query);
}
?>