<!DOCTYPE html>
<html lang="en">

<head>
    <!-- seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lưới Lực Sĩ &#8211; Bền Bỉ &#8211; Cho Nhà Nông Tỷ Tỷ</title>
    <link rel="SHORTCUT ICON" href="img/icon.jpg" type="image/x-icon" />


    <!-- link source -->

    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">

    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <!-- <link rel="stylesheet" href="css/reponsive.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/detail.css">
    <link rel="stylesheet" href="./css/reponsive.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="full bg-1">
            <div class="container header-contact">
                <a href="tel:0332519218">0332519218</a>
                <a href="mailto:hovanphancoder@gmail.com" class="hd-mail">hovanphancoder@gmail.com</a>
                <button class="search" id="mySearch" onclick="showSearch()">
                    <i class='fas fa-search'></i>
                </button>
            </div>
        </div>
        <div id="hidesearch">
            <!-- &key= echo'.$keysearch.';?> -->
            <form action="index.php?ctrl=search" method="POST">
                <input type="search" name="textsearch" placeholder="Tìm kiếm..." name="" id="">
                <!-- <input type="submit" name="xnSearch" value="tim"> -->
                <button name="xnSearch" class="btn-search"><i class='fas fa-search'></i></button>
            </form>
            <button id="close-search" onclick="closesearch()" class="hide-bsox-search">x</button>
        </div>
        <div class="full bg-2">
            <div class="container menu">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logolucsi.jpg" width="100%" alt=""></a>
                </div>
                <div class="navbar-hien">
                    <ul>
                        <li><a href="index.php">Trang chủ</a></li>
                        <li><a href="index.php?ctrl=about">giới thiệu
                                <!-- <ul class="sub-menu">
                                    <li><a href="">congty</a></li>
                                    <li><a href="">hj</a></li>
                                </ul> -->
                            </a>
                        </li>
                        <li class="bosung">
                            <a>
                                sản phẩm<i class='fas dropicon'>&#xf107;</i></a>
                            <ul class="sub-menu">
                                <?php
                                // foreach($callcata as $p){
                                //     echo'
                                //         <li class="hiensubsubmenu"><a href="index.php?ctrl=catalog&id='.$p['id'].'">'.$p['tendanhmuc'].' 
                                //                 <ul class=" dotensp">
                                //                     <li><a href="index.php?ctrl=catalog&id='.$p['id'].'">jjjjj</a></li>
                                //                     <li><a href="index.php?ctrl=catalog&id='.$p['id'].'">jjjjj</a></li>     
                                //                     <li><a href="index.php?ctrl=catalog&id='.$p['id'].'">jjjjj</a></li>     
                                //                     <li><a href="index.php?ctrl=catalog&id='.$p['id'].'">jjjjj</a></li>
                                //                     <li><a href="index.php?ctrl=catalog&id='.$p['id'].'">jjjjj</a></li>     
                                //                     <li><a href="index.php?ctrl=catalog&id='.$p['id'].'">jjjjj</a></li>
                                //                 </ul>efgdfdf
                                //         </a></li> 
                                //     ';
                                // }
                                ?>
                                <li class="hiensubsubmenu"><a href="index.php?ctrl=catalog&id=1">lƯỚI</a>
                                    <!-- <ul class=" dotensp">
                                            <li><a href="index.php?ctrl=detail&id=1">jjj gfjhgjh gu ui i</a>
                                            </li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                        </ul> -->
                                </li>
                                <li class="hiensubsubmenu"><a href="index.php?ctrl=catalog&id=2">BẠT- VẢI ĐỊA </a>
                                    <!-- <ul class=" dotensp">
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                        </ul> -->

                                </li>
                                <li class="hiensubsubmenu"><a href="index.php?ctrl=catalog&id=3">DÂY</a>
                                    <!-- <ul class=" dotensp">
                                            <li><a href="index.php?ctrl=detail&id=1">jjj FGFHGB</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                        </ul> -->
                                </li>
                                <li class="hiensubsubmenu"><a href="index.php?ctrl=catalog&id=4">KHÁC </a>
                                    <!-- <ul class=" dotensp">
                                                <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                                <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                                <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                                <li><a href="index.php?ctrl=detail&id=1">jjjj</a></li>
                                            </ul> -->
                                </li>
                            </ul>
                            </a>
                        </li>
                        <li><a href="index.php?ctrl=contact">liên hệ</a></li>
                    </ul>
                </div>
                <div class="navbar-an">
                    <button class="search" id="myMenu" onclick="showmenu()">
                        <i class="fas fas fa-bars "></i>
                    </button>
                    <button class="search" id="mySearch" onclick="showSearch()">
                        <i class='fas fa-search'></i>
                    </button>
                    <ul class="menuhide" id="myhidemenu">
                        <li><a href="index.php" data-text="Trang chủ">
                                trang chủ
                            </a></li>
                        <li><a href="index.php?ctrl=about" data-text="Giới thiệu">
                                giới thiệu
                            </a></li>

                        <li class="hien-danhmuc"> <a>sản phẩm</a><i class='fas dropicon'>&#xf107;</i></a>
                            <ul class="sub-menu-hide">

                                <li><a href="index.php?ctrl=catalog&id=1">lưới</a></li>
                                <!-- <ul class="menusub">
                                            <a href="">
                                                <li>dfg</li>
                                            </a>
                                            <a href="">
                                                <li>dfg</li>
                                            </a>
                                        </ul> -->
                                <li> <a href="index.php?ctrl=catalog&id=2">bạt </a></li>
                                <!-- <ul class="menusub">
                                            <a href="">
                                                <li>dfg</li>
                                            </a>
                                            <a href="">
                                                <li>dfg</li>
                                            </a>
                                        </ul> -->
                                <li> <a href="index.php?ctrl=catalog&id=3">dây</a></li>
                                <!-- <ul class="menusub">
                                            <a href="">
                                                <li>dfg</li>
                                            </a>
                                            <a href="">
                                                <li>dfg</li>
                                            </a>
                                        </ul> -->
                                <li><a href="index.php?ctrl=catalog&id=4">khác</a></li>
                                <!--<ul class="menusub">
                                            <a href="">
                                                <li>dfg</li>
                                            </a>
                                            <a href="">
                                                <li>dfg</li>
                                                </a>
                                    </ul> -->
                            </ul>
                        </li>
                        <!-- <button class="showlistmenu">+</button> -->
                        <!-- </a> -->
                        <li> <a class="menu-lienhe" href="index.php?ctrl=contact" data-text="liên hệ">
                                liên hệ
                            </a>
                        </li>
                        <button onclick="closemenu()" class="zindexmenu">x</button>
                    </ul>
                </div>
            </div>
        </div>
    </header>