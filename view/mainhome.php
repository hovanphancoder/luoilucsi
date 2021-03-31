<main class="full ">

    <div class="container ">
        <!-- luoi chong nang -->

        <div class="box-list-product ">
            <p class="title-sp ">Lưới</p>

            <div class="show-4-sp ">
                <?php
                    foreach($callproductid as $a){
                        echo'
                            <a href="index.php?ctrl=detail&id='.$a['id'].'" class="box-sp">
                                <div class="box-img ">
                                    <img src="img/'.$a['img'].'" width="100% " height="100% " alt=" ">
                                    <h2 class="name-sp ">
                                        '.$a['nameProduct'].'
                                    </h2>
                                </div>
                            </a>
                        ';
                    }
               ?>
            </div>
        </div>
        <div class="box-list-product ">
            <p class="title-sp ">Vải-bạt</p>

            <div class="show-4-sp ">
                <?php
                    foreach($callproductid2 as $h){
                        echo'
                            <a href="index.php?ctrl=detail&id='.$h['id'].'" class="box-sp">
                                <div class="box-img ">
                                    <img src="img/'.$h['img'].'" width="100% " height="100% " alt=" ">
                                    <h2 class="name-sp ">
                                        '.$h['nameProduct'].'
                                    </h2>
                                </div>
                            </a>
                        ';
                    }
               ?>
            </div>
        </div>
        <div class="box-list-product ">
            <p class="title-sp ">dây</p>

            <div class="show-4-sp ">
                <?php
                    foreach($callproductid3 as $k){
                        echo'
                            <a href="index.php?ctrl=detail&id='.$k['id'].'" class="box-sp">
                                <div class="box-img ">
                                    <img src="img/'.$k['img'].'" width="100% " height="100% " alt=" ">
                                    <h2 class="name-sp ">
                                        '.$k['nameProduct'].'
                                    </h2>
                                </div>
                            </a>
                        ';
                    }
               ?>
            </div>
        </div>
        <div class="box-list-product ">
            <p class="title-sp ">sản phẩm khác</p>

            <div class="show-4-sp ">
                <?php
                    foreach($callproductid4 as $a){
                        echo'
                            <a href="index.php?ctrl=detail&id='.$a['id'].'" class="box-sp">
                                <div class="box-img ">
                                    <img src="img/'.$a['img'].'" width="100% " height="100% " alt=" ">
                                    <h2 class="name-sp ">
                                        '.$a['nameProduct'].'
                                    </h2>
                                </div>
                            </a>
                        ';
                    }
               ?>
            </div>
        </div>

    </div>
</main>