<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=dstk" method="POST">
            <input type="text" name="kyw">
                
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>ID</th>
                <th>USER</th>
                <th>EMAIL</th>
                <th>PASS</th>
                <th>ADDRESS</th>
                <th>SỐ ĐIỆN THOẠI</th>
                
            </tr>
            <?php
             foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suasp="index.php?act=suatk&id=".$id;
                $xoasp="index.php?act=xoatk&id=".$id;
               
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$user.'</td>
                <td>'.$email.'</td>
                <td>'.$pass.'</td>
                <td>'.$address.'</td>
                <td>'.$tel.'</td>
                <td><a href="'.$suasp.'"><input type="button" value="Sửa"><a href="'.$xoasp.'"><input type="button" value="Xóa"></td>
            </tr>';
             }
            ?>
            
            
            
           </table>
           </div>
         <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
<a href="#"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>
