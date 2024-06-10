<?php
if (is_array($sanpham)) {
   extract(($sanpham));
}
$hinhpath="../upload/".$img;
                if (is_file($hinhpath)) {
                    $hinh="<img src='".$hinhpath."'height='80'>";
                }
                else {
                    $hinh="no photo";
                }
?>
<div class="row2">
    <div class="row2 font_title">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="row2 form_content ">
        <form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10 form_content_container">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                    <?php 
                    foreach ($listdanhmuc as $danhmuc) {
                       extract($danhmuc);
                       if ($iddm==$id) $s="selected"; else $s="";
                       echo '<option value="'.$id.'"'.$s.'>'.$name.'</option>';
                       
                       
                    }
                    
                    ?>
                </select>
            </div>
            <div class="row2 mb10">
                <label>Tên sản phẩm </label> <br>
                <input type="text" name="tensp" value="<?php echo $sanpham['name']; ?>" >
            </div>
            <div class="row2 mb10">
                <label>Hình</label> <br>
                <input type="file" name="hinh" >
                <?=$hinh?>
            </div>
            <div class="row2 mb10">
                <label>Giá</label> <br>
                <input type="text" name="giasp" placeholder="nhập vào giá sản phẩm" value="<?=$price?>">
            </div>
            
            <div class="row2 mb10">
                <label>Mô tả</label> <br>
                <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
            </div>
            
            <div class="row mb10 ">
                <input type="hidden" name="id" value="<?php echo $sanpham['id']; ?>">
                <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
                <input class="mr20" type="reset" value="NHẬP LẠI">

                <a href="index.php?act=listsp"><input class="mr20" type="button" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != ""))
                echo $thongbao;

            ?>
        </form>
    </div>
</div>

<!-- END HEADER -->


</div>