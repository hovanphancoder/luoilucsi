<?php
function checkLogin($e,$p){
    $DPO=connect();
    $sql="SELECT * FROM admin WHERE nameAdmin='$e' && password ='$p' ";
    $result=$DPO->query($sql);
    $row=$result->rowCount();
    if($row==0){
        return false;
    }
        return true;
}
?>