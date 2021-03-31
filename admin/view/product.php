<section>
    <h1>Quản lý sản phẩm</h1>
    <!-- <h3 class="sub-title">
            thông tin tour </h3> -->
    <form action="index.php?ctrl=product&action=add" method="Post" class="form-tour">
        <div>
            <input type="hidden" name="id" <?php if(isset($product)) echo 'value="'.$product['id'].'"'; ?>>
            <label for="">ảnh</label>
            <input type="file" name="anhsp">
        </div>
        <div>
            <label for="">ten sp</label>
            <input type="text" name="tensp" id=""
                <?php if(isset($product)) echo 'value="'.$product['nameProduct'].'"'; ?>>
        </div>
        <div>
            <label for="">danh muc</label>
            <select name="numberdanhmuc" id="" <?php if(isset($product)) echo 'value="'.$product['danhmuc'].'"'; ?>>
                <option value="0">lựa chọn danh muc</option>
                <?php
                foreach($getlist as $y){
                echo'
                    <option value="'.$y['id'].'">'.$y['tendanhmuc'].'</option>
                ';}
                ?>
            </select>
        </div>
        <label for="">chi tiet</label>
        <textarea id="my_editor2" name="chitiecsp" placeholder="nhap chi tiet"
            <?php if(isset($product)) echo 'value="'.$product['detailProduct'].'"'; ?>></textarea>
        <br><br>
        <label for="">mô tả</label>
        <textarea id="my_editor" name="motasp" placeholder="nhập mô tả"
            <?php if(isset($product)) echo 'value="'.$product['mota'].'"'; ?>></textarea>
        <br><br>
        <input type="submit" class="nut-ok nutluu" value="xac nhan">

    </form>

    <h3 class="sub-title">danh sách san pham</h3>
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>anh</td>
                <td>tensp</td>
                <td>danh muc</td>
                <td>chi tiec</td>
                <td>mota</td>
                <td>
                    action
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
            $calllisttour=getAllproduct();
            foreach($calllisttour as $g){
                echo'
                    <tr>
                        <td>'.$g['id'].'</td>
                        <td>
                            <img src="../img/'.$g['img'].'" width="50px">
                        </td>
                        <td>'.$g['nameProduct'].'</td>
                        <td>'.$g['danhmuc'].'</td>
                        <td>'.$g['detailProduct'].'</td>
                        <td>'.$g['mota'].'</td>
                        <td>
                            <a href="index.php?ctrl=product&action=edit&idsua='.$g['id'].'" class="sua"><i class="fa fa-edit"></i></a>
                            <a href="index.php?ctrl=product&action=del&idxoa='.$g['id'].'" class="xoa"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                ';
            }
        ?>
        </tbody>
    </table>
    </div>
</section>
<script src="./ckeditor/ckeditor.js"></script>
<script src="./ckfinder/ckfinder.js"></script>
<script>
ClassicEditor.create(document.getElementById('my_editor'));
ClassicEditor.create(document.getElementById('my_editor2'));
</script>
</body>

</html>