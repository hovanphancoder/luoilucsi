<div class="full bg-img-2">
    <div class="container ">
        <h4 class="title-contact">tìm kiếm:"
            <?= $keysearch?>
            "
        </h4>
    </div>
</div>
<div class="full">
    <div class="container ">
        <!-- luoi chong nang -->
        <div class="box-list-product ">
            <!-- <p class="title-sp ">day</p> -->
            <div class="show-4-sp ">
                <?php
                    foreach($getsearch as $y){
                        echo'
                            <a href="index.php?ctrl=detail&id='.$y['id'].'" class="box-sp">
                                <div class="box-img ">
                                    <img src="img/'.$y['img'].'" width="100% " height="100% " alt="">
                                    <h2 class="name-sp ">
                                        '.$y['nameProduct'].'
                                    </h2>
                                </div>
                            </a>
                        ';
                    }  
                ?>
            </div>
        </div>

    </div>
</div>