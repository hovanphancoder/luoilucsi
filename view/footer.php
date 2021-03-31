    <!-- footer -->
    <!-- -------------------------------------------------------------- -->
    <footer class="bg-6 " style="margin-top:20px">
        <div class="full layout">
            <!-- <footer class="bg-ft" style="margin-top:20px"> -->
            <div class="container footer pb-50 ">
                <div class="box-col3 ">
                    <!-- <h5 class="introduct ">gioi thieu</h5> -->
                    <div class="ft-logo">
                        <img src="./img/logolucsi.jpg" width="100%" alt="">
                    </div>

                    <p class="ft-info"> Là nhà sản xuất trực tiếp, cung cấp các sản phẩm Lưới và Dây nhựa chất lượng cao
                        áp
                        dụng cho Nông nghiệp, Làm vườn, Nuôi trồng thủy sản, Xây dựng và các mục đích thương mại khác.
                    </p>
                </div>
                <div class="box-col3 ">
                    <h5 class="introduct ">Liên hệ</h5>
                    <div class="ft-lienhe">
                        <table class="ft-table">
                            <tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>527/529 Bình Thới, phường 10, Quận 11, Thành phố Hồ Chí Minh</td>
                            </tr>
                            <tr>
                                <td><i class=" 	fas fa-phone-alt"></i>
                                </td>
                                <td>
                                    <a href="tel:033251921"> 0332519218</a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="	fab fa-facebook-f"></i>
                                </td>
                                <td>
                                    <a href="https://facebook.com/lucsinhanong">luoilucsi</a>
                                </td>
                            </tr>
                            <tr>
                                <td><i class="far fa-envelope"></i>
                                </td>
                                <td><a href="mailto:hovanphancoder@gmail.com">hovanphancoder@gmail.com</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="box-col3 ">
                    <h5 class="introduct ">Danh mục</h5>
                    <ul>
                        <?php
                        foreach($callcataft as $p){
                            echo'
                                <li><a href="index.php?ctrl=catalog&id='.$p['id'].'">'.$p['tendanhmuc'].'</a></li>
                            ';
                        }
                    ?>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------------------------------------------------------------- -->
    <!-- link js & library -->
    <div class="uptotop " id="myBtn">
        <i class='	fas fa-angle-double-up'></i>
    </div>
    <div class="call ">
        <a href="tel:0332519218 "> <i class='fas  fas fa-phone-alt'></i></a>
    </div>
    <script src="./js/main.js "></script>
    <!-- <script src="./js/banner.js "></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="css/bootstrap4/popper.js"></script>
    <script src="css/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="js/custom.js"></script>
    <!-- -------------------------------------------------------------- -->
    </body>