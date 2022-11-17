<div id="main-content-wp" class="list-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Danh sách tác giả</h3>
                    <a href="?page=form_add_tacgia" title="" id="add-new" class="fl-left">Thêm mới</a>
                </div>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <div class="table-responsive">
                        <table class="table list-table-wp">
                                <tr>
                                    <th><input type="checkbox" name="checkAll" id="checkAll"></th>
                                    <th><span class="thead-text">STT</span></th>
                                    <th><span class="thead-text">Tên tác giả</span></th>
                                    <th><span class="thead-text">Mã tác giả</span></th>
                                    <th><span class="thead-text">Người tạo</span></th>
                                    <th><span class="thead-text">Tùy chọn</span></th>
                                </tr>
                                <?php
                                $sql="SELECT * FROM tbl_tacgia";
                                $rs=mysqli_query($con,$sql);
                                $count=0;
                                while($r=mysqli_fetch_assoc($rs))
                                {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" name="checkAll" id="checkAll"></td>
                                        <td><?=$count?></td>
                                        <td><?=$r['tacgia_name']?></td>
                                        <td><?=$r['tacgia_id']?></td>
                                        <td>Admin</td>
                                        <td>
                                        <a href="?page=form_edit_tacgia&id=<?=$r['tacgia_id']?>" title="Sửa" class="edit" style=margin:10px><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                <a href="?page=update_tacgia&id=<?=$r['tacgia_id']?>" title="Xóa" class="delete" style=margin:10px><i class="fa fa-trash" aria-hidden="true"  onclick='return confirm("Bạn chắc chắn muốn tiếp tục xóa không?")'></i></a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="section" id="paging-wp">
                <div class="section-detail clearfix">
                    <p id="desc" class="fl-left">Chọn vào checkbox để lựa chọn tất cả</p>
                    <ul id="list-paging" class="fl-right">
                        <li>
                            <a href="" title=""><</a>
                        </li>
                        <li>
                            <a href="" title="">1</a>
                        </li>
                        <li>
                            <a href="" title="">2</a>
                        </li>
                        <li>
                            <a href="" title="">3</a>
                        </li>
                        <li>
                            <a href="" title="">></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>