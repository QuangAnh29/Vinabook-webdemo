<?php
$id=$_GET['id'];
$sql="SELECT * FROM tbl_tacgia WHERE tacgia_id='$id'";
$rs=mysqli_query($con,$sql);
$r=mysqli_fetch_array($rs);
?>

<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Cập nhật tác giả</h3>
                </div>
                <p class="success" style="color:lawngreen"><?php if (isset($success1)) echo $success1 ?></p>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form action="?page=edit_tacgia&id=<?=$id?>"method="POST">
                        <label for="tacgia_name">Tên tác giả</label>
                        <input type="text" name="tacgia_name" id="tacgia_name" value="<?=$r['tacgia_name']?>">
                        <button type="submit" name="btn-submit" id="btn-submit"> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>