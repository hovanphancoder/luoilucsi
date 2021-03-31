<?php 
ob_start();
include_once 'model/config.php';
include_once 'model/product.php';
include_once 'model/catalog.php';
include_once 'model/contact.php';
include_once 'model/search.php';


$callcata=callallcata();
include 'view/header.php';


    $action = "home";
    if(isset($_GET['ctrl'])){
        $action=$_GET['ctrl'];
    }

    switch($action){

        case 'home':
            include 'view/banner.php';
            $callproductid = calldetailproid1();
            $callproductid2 = calldetailproid2();
            $callproductid3 = calldetailproid3();
            $callproductid4 = calldetailproid4();
            include 'view/mainhome.php';
            include 'view/whychoose.php';
        break;
        
        case 'product':
            $callproductid = calldetailproid1();
            $callproductid2 = calldetailproid2();
            $callproductid3 = calldetailproid3();
            $callproductid4 = calldetailproid4();
            include 'view/mainhome.php';
          
        break;
        
        case 'about':
            include 'view/about.php';
        break;

        case 'detail':
            if(isset($_GET['id'])){
            $proid=$_GET['id'];
            $calldetailid =calldetailproid($proid);
            }
            include 'view/detail.php';
        break;

        case 'catalog':
            if(isset($_GET['id'])){
                $cataid=$_GET['id'];
                $callnamedanhmuc=callnamecata($cataid);
                $callcataid=callcataid($cataid);
            }
            // else{
            // print'loi';
            // }
            include 'view/show4box.php';
        break;

        case 'search':
            if(isset($_POST['xnSearch']) && isset($_POST['textsearch'])){
                $abc=$_POST['xnSearch'];
                $keysearch=$_POST['textsearch'];
                $getsearch = searchProduct($keysearch);
            }
            include 'view/product.php';
        break;
        
        case 'contact':
            if(isset($_POST['xnsend'])){
                $name=$_POST['nameuser'];
                $phone=$_POST['phoneuser'];
                $email=$_POST['emailuser'];
                $diachi=$_POST['addressuser'];
                $content=$_POST['contentuser'];
                $time=date('y-m-d H:i:s');  
                $addmail=addcontact($name,$email,$phone,$diachi,$content,$time);
                function sanitize_my_email($field) {
                    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
                    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
                        return true;
                    } else {
                        return false;
                    }
                }
                $to_email=$email;
                $message=$content;
                $subject=$name;
                $headers= "From:hovanphandev@gmail.com \r\n";
                $secure_check = sanitize_my_email($to_email);
                if (($secure_check == false)) {
                    // echo '<script>alert("mời nhập thông tin trước khi gửi");</script>';
                } else { 
                    mail($to_email, $subject, $message, $headers);
                    echo '<script>alert("This email is sent using PHP Mail");</script>';
                }
            }
            include 'view/contact.php';
        break;
    }
$callcataft=callallcata();
include 'view/footer.php';
?>