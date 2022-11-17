<?php
        $tacgia_name=$_POST['tacgia_name'];
        if(!empty($tacgia_name))
        {
            $sql1="SELECT tacgia_name FROM tbl_tacgia WHERE tacgia_name='$tacgia_name'";
            $rs=mysqli_query($con,$sql1);
            $list=array();
            while($r=mysqli_fetch_array($rs))
            {
                $list[]=$r;
            }
            if(count($list)<=0)
            {
                $sql="INSERT INTO tbl_tacgia(tacgia_name) VALUES ('$tacgia_name')";
                mysqli_query($con,$sql);
                echo "<script>alert('Bạn đã thêm thành công!')</script>";
                require("list_tacgia.php");
    
            }
            else{
                echo '<script>alert("Tên tác giả đã tồn tại")</script>';
                require("form_add_tacgia.php");
            }

        }
        else{
            echo '<script>alert("Tên tác giả không được bỏ trống")</script>';
            require("form_add_tacgia.php");
        }
?>