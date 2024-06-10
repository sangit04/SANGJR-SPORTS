<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SÁCH TÀI KHOẢN</h1>
         </div>
         <div class="row2 form_content ">
          
           
                
           <div class="row2 mb10 formds_loai">
           <table>
            <tr>
                <th></th>
                <th>MÃ DANH MỤC</th>
                <th>TÊN DANH MỤC</th>
                <th>SỐ LƯỢNG</th>
                <th>GIÁ CAO NHẤT</th>
                <th>GIÁ THẤP NHẤT</th>
                <th>GIÁ TRUNG BÌNH</th>
                
            </tr>
            <?php
             foreach ($dsthongke as $thongke) {
                extract($thongke);
                
                echo'
                <tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$name.'</td>
                <td>'.$soluong.'</td>
                <td>'.$gia_min.'$</td>
                <td>'.$gia_max.'$</td>
                <td>'.number_format($gia_avg, 2).'$</td>
                
            </tr>';
             }
            ?>
            
            
            
           </table>
           </div>
           <div class="row mb10 ">
         <a href="index.php?act=bieudo"><input class="mr20" type="button" value="BIỂU ĐỒ"></a>
        

           </div>
         
           
         </div>
        </div>

