<?php
function addcontact($name,$email,$phone,$diachi,$content,$time){
    $DBH = connect();
    $query ="INSERT INTO lienhe(name,email,phone,address, content,time) VALUES 
    ('$name','$email','$phone','$diachi','$content','$time')";
    $sth=$DBH->exec($query);
    return $sth;
}

?>