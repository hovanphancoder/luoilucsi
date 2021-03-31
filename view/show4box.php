<div class="container">
    <div class="box-list-product ">
        <p class="title-sp ">
            <?php
                   foreach($callnamedanhmuc as $o){
                        echo $o['tendanhmuc'];
                    }?>

        </p>
        <div class="show-4-sp ">

            <?php
            foreach($callcataid as $u){
             echo'
            <a href="index.php?ctrl=detail&id='.$u['id'].'" class="box-sp">
                <div class="box-img ">
                    <img src="img/'.$u['img'].'" width="100% " height="100% " alt=" ">
                    <h2 class="name-sp ">
                        '.$u['nameProduct'].'
                    </h2>
                </div>
            </a>';
            }?>

        </div>
    </div>
</div>