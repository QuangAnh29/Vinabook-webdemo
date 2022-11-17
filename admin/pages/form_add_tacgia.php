<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm mới tác giả</h3>
                </div>
                <p class="success" style="color:lawngreen"><?php if (isset($success1)) {echo $success1;} ?>
                </p>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form action="?page=add_tacgia" method="POST">
                        <label for="tacgia_name">Tên Tác Giả</label>
                        <input type="text" name="tacgia_name" id="tacgia_name">
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>