  <section>
      <h1>Quản lý danh mục</h1>
      <!-- <h3 class="sub-title">
                thông tin tour </h3> -->
      <form action="index.php?ctrl=catalog&action=add" method="post" class="form-tour">
          <div>
              <input type="hidden" name="id" <?php if(isset($cata)) echo 'value="'.$cata['id'].'"'; ?>>
              <label for="">Tên danh mục</label>
              <input type="text" name="tendanhmuc" id="tendanhmuc"
                  <?php if(isset($cata)) echo 'value="'.$cata['tendanhmuc'].'"'; ?>>
          </div>

          <div>
              <input type="submit" class="nut-ok nutluu nutluu-vung" name="btn-access-cata" value="Add">
          </div>
      </form>
      <h3 class="sub-title">danh sách danh mục</h3>
      <table class="table">
          <thead>
              <tr>
                  <th>id</th>
                  <th>tên danh mục</th>
                  <th>
                      action
                  </th>
              </tr>
          </thead>
          <tbody>
              <?php
              $callAllCata=getAllcata_ad();
              foreach( $callAllCata as $g)
              echo'
                <tr>
                    <td>'.$g['id'].'</td>
                    <td>'.$g['tendanhmuc'].'</td>
                    <td>
                        <a href="index.php?ctrl=catalog&action=edit&idsua='.$g['id'].'" class="sua"><i class="fa fa-edit"></i></a>
                        <a href="index.php?ctrl=catalog&action=del&idxoa='.$g['id'].'" class="xoa"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                ';
              ?>
          </tbody>
      </table>
      </div>
  </section>
  </body>

  </html>