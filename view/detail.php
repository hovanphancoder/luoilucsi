  <?php 
  foreach($calldetailid as $d){
  echo'
 <div class="full bg-img-2">
     <div class="container ">
         <h4 class="title-contact" >chi tiết sản phẩm</h4>
     </div>
 </div>
 <div class="detail container">
     <div class="detail-img">
         <!-- <div class="detail-img-left">
                    <div class="detail-box-img">
                        <img src="./img/mau-nha-luoi-trong-rau-2.jpg" width="100%" height="100%" alt="">
                    </div>
                    <div class="detail-box-img">
                        <img src="./img/mau-nha-luoi-trong-rau-2.jpg" width="100%" height="100%" alt="">
                    </div>
                    <div class="detail-box-img">
                        <img src="./img/mau-nha-luoi-trong-rau-2.jpg" width="100%" height="100%" alt="">
                    </div>
                    <div class="detail-box-img">
                        <img src="./img/mau-nha-luoi-trong-rau-2.jpg" width="100%" height="100%" alt="">
                    </div>
                </div> -->
         <!-- <div class="detail-img-right"> -->
         <img src="./img/'.$d['img'].'" width="100%" height="auto" alt="">
         <!-- </div> -->
     </div>
     <div class="detail-mota">
         <h1 class="ten-sp-detail">
            '.$d['nameProduct'].'
 </h1>
     '.$d['detailProduct'].'
 </div>
 </div>
 <div class=" full">
     <div class="container chitiet">
         '.$d['mota'].'
    </div>
 </div>
';}
?>