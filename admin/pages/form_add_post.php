
<div id="main-content-wp" class="add-cat-page">
    <div class="wrap clearfix">
        <?php require 'inc/sidebar.php'; ?>
        <div id="content" class="fl-right">
            <div class="section" id="title-page">
                <div class="clearfix">
                    <h3 id="index" class="fl-left">Thêm mới bài viết</h3>
                </div>
                <p class="success" style="color:lawngreen"><?php if (isset($success1)) echo $success1 ?></p>
            </div>
            <div class="section" id="detail-page">
                <div class="section-detail">
                    <form action="?page=add_post" method="POST" enctype="multipart/form-data">
                        <label for="post_name">Tiêu đề</label>
                        <input type="text" name="post_name" id="post_name">
                        <label for="post_slug">Slug ( Friendly_url )</label>
                        <input type="text" name="post_slug" id="post_slug">
                        <label for="post_desc">Mô tả</label>
                        <textarea name="post_desc" id="post_desc" class="ckeditor"></textarea>
                        <label>Hình ảnh</label>
                        <div id="uploadFile">
                            <input type="file" name="file" id="file">
                            <p class="success" style="color:lawngreen"><?php if (isset($success)) echo $success ?></p>
                        </div>
                        
                        <button type="submit" name="btn-submit" id="btn-submit">Thêm mới</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>