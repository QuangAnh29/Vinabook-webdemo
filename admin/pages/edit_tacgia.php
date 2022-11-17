<?php
    $id=$_GET['id'];
    $tacgia_name=$_POST['tacgia_name'];
    $sql_update="UPDATE tbl_tacgia SET tacgia_name='$tacgia_name' WHERE tacgia_id='$id'";
    mysqli_query($con,$sql_update);
    echo "<script>alert('Bạn đã sửa thành công!')</script>";
    require("list_tacgia.php");
?>
