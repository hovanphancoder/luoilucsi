<?php

session_start();
include_once 'model/config.php';
include_once 'model/login.php';
include_once 'model/product.php';
include_once 'model/catalog.php';


    $action='home';
    if(isset($_SESSION['admin'])){
        include 'view/nav.php';
        if(isset($_GET['ctrl'])){
            $action = $_GET['ctrl'];
        }
    }
    else{
        $action="login";
    }

    switch ($action){
        case 'login':
            if(isset($_POST['btn_submit'])){
                $e=$_POST['email'];
                $p=$_POST['pass'];
                if(checklogin($e,$p)){
                    $_SESSION['admin']=$e;
                }
                header('location:index.php');
            }
            else{
                include 'view/dangnhap.php';
            }
        break;

        case 'logout':
            unset($_SESSION['admin']);
            header('location:index.php');
        break;
        
        case 'home':
            include 'view/home.php';
        break;

        case 'product':
    
           if(isset($_GET['action'])){
                if($_GET['action']=="add"){
                    if(empty($_POST['id'])){
                        $ten=$_POST['tensp'];
                        $chitiec=$_POST['chitiecsp'];
                        $mota=$_POST['motasp'];
                        $anh=$_POST['anhsp'];
                        $dm=$_POST['numberdanhmuc'];
                        $time=date('y-m-d H:i:s');
                        addproduct($ten,$chitiec,$mota,$anh,$time,$dm);
                    }
                    else{
                        $id=$_POST['id'];
                        $ten=$_POST['tensp'];
                        $chitiec=$_POST['chitiecsp'];
                        $mota=$_POST['motasp'];
                        $anh=$_POST['anhsp'];
                        $dm=$_POST['numberdanhmuc'];
                        $time=date('y-m-d H:i:s');
                        updateproduct($id,$ten,$chitiec,$mota,$anh,$time,$dm);
                    }
                    header('location:index.php?ctrl=product');
                }
                 else if($_GET['action']=="del"){
                    $id=$_GET['idxoa'];
                    deleteproduct( $id);
                    header('location:index.php?ctrl=product');
                }
                else if($_GET['action']=="edit"){
                    $idpro=$_GET['idsua'];
                    $product=getProductid_ad($idpro);
                }
            }
            $getlist=getAllcata_ad();
            include 'view/product.php';
        break;
        case 'catalog':
            if(isset($_GET['action'])){
                if($_GET['action']=="add"){
                    if(empty($_POST['id'] && isset($_POST['tendanhmuc']) )){
                        $tencata=$_POST['tendanhmuc'];
                        addcata($tencata);
                    }
                    else{
                        $tencata=$_POST['tendanhmuc'];
                        $idcata=$_POST['id'];
                        updatecata($idcata,$tencata);
                    }
                    header('location:index.php?ctrl=catalog');
                }
                else if($_GET['action']=="del"){
                    deletecata($_GET['idxoa']);
                    header('location:index.php?ctrl=catalog');
                 }
                else if($_GET['action']=="edit"){
                    $id=$_GET['idsua'];
                    $cata=getcataid_ad($id);
                }
            }
            include 'view/cata.php';        
        break;
        case 'contact':
            include 'view/contact.php';
        break;
    }
?>