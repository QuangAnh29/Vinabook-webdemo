<?php get_component('header'); ?>
<?php 
$list_moiphathanh = get_list_product_by_catid(1);
$list_sachtrongnuoc = get_list_product_by_catid(2);
$list_sachnuocngoai = get_list_product_by_catid(3);
$list_sachthieunhi = get_list_product_by_catid(4);
$list_sachvanhoc = get_list_product_by_catid(5);
$list_sachkhoahoc = get_list_product_by_catid(6);
$list_ot_product = get_list_outstanding_product();
?>
<div id="main-content-wp" class="home-page clearfix">
    <div class="wp-inner">
        <div class="main-content fl-right">
            <div class="section" id="slider-wp">
                <div class="section-detail">
                    <div class="item">
                        <img src="public/images/giaodien1.jpg" alt="anh1">
                    </div>
                    <div class="item">
                        <img src="public/images/giaodien11.jpg" alt="anh2">
                    </div>
                    <div class="item">
                        <img src="public/images/giaodien111.jpg" alt="anh3">
                    </div>
                </div>
            </div>
            <div class="section" id="support-wp">
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon1.png">
                            </div>
                            <h3 class="title">Vận chuyển nhanh</h3>
                            <p class="desc">Đơn hàng từ 300k nội thành TPHCM</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon2.png">
                            </div>
                            <h3 class="title">Uy tín 30 năm</h3>
                            <p class="desc">Thành lập từ 1989</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon3.png">
                            </div>
                            <h3 class="title">Đặt hàng ngay</h3>
                            <p class="desc">Gọi số: 093 824 6605</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon4.png">
                            </div>
                            <h3 class="title">Vận chuyển tận nơi</h3>
                            <p class="desc">Trực tiếp tới khách hàng</p>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="public/images/icon5.png">
                            </div>
                            <h3 class="title">Thanh toán đa dạng</h3>
                            <p class="desc">Thao tác đơn giản</p>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Sản phẩm nổi bật  -->
            <div class="section" id="feature-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Sản phẩm nổi bật</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                    <?php if (count($list_ot_product) > 0) {
                            for ($i = 0; $i < count($list_ot_product); $i++) {?>
                                <li>
                                <a href="?mod=product&act=detail&id=<?= $list_ot_product[$i]['pro_id']?>&cat_id=<?= $list_ot_product[$i]['cat_id']?>" title="" class="thumb">
                                    <img src="<?= $list_ot_product[$i]['pro_image'] ?>" style="object-fit: contain;width: 100%;height: 174px;">
                                </a>
                                <a href="?mod=product&act=detail&id=<?= $list_ot_product[$i]['pro_id']?>&cat_id=<?= $list_ot_product[$i]['cat_id']?>" title="" class="product-name"><?=$list_ot_product[$i]['pro_name']?></a>
                                <div class="price">
                                    <span class="new"><?=currency_format($list_ot_product[$i]['original_price'])?></span>
                                    <span class="old"><?=currency_format($list_ot_product[$i]['promotional_price'])?></span>
                                </div>
                                <div class="action clearfix">
                                    <a href="?mod=cart&act=add&pro_id=<?=$list_ot_product[$i]['pro_id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?mod=cart&act=add&pro_id=<?=$list_ot_product[$i]['pro_id']?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>
                    <?php }?>
                    <?php } ?>
                    </ul>
                </div>
            </div>

     
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title" style="margin-top: 0;">Sách Mới Phát Hành</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (count($list_moiphathanh) > 0) {
                            for ($i = 0; $i < 4; $i++) {?>
                                <li>
                                <a href="?mod=product&act=detail&id=<?= $list_moiphathanh[$i]['pro_id']?>&cat_id=<?= $list_moiphathanh[$i]['cat_id']?>" title="" class="thumb">
                                    <img src="<?= $list_moiphathanh[$i]['pro_image'] ?>" style="object-fit: contain;width: 100%;height: 174px;">
                                </a>
                                <a href="?mod=product&act=detail&id=<?= $list_moiphathanh[$i]['pro_id']?>&cat_id=<?= $list_moiphathanh[$i]['cat_id']?>" title="" class="product-name"><?=$list_moiphathanh[$i]['pro_name']?></a>
                                <div class="price">
                                    <span class="new"><?=currency_format($list_ot_product[$i]['original_price'])?></span>
                                    <span class="old"><?=currency_format($list_ot_product[$i]['promotional_price'])?></span>
                                </div>
                                <div class="action clearfix">
                                    <a href="?mod=cart&act=add&pro_id=<?=$list_moiphathanh[$i]['pro_id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                    <a href="?mod=cart&act=add&pro_id=<?=$list_moiphathanh[$i]['pro_id']?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                </div>
                            </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>



            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title" style="margin-top: 0;">Sách Trong Nước</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (count($list_sachtrongnuoc) > 0) {
                            for ($i = 0; $i < count($list_sachtrongnuoc); $i++) {?>
                                <li>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachtrongnuoc[$i]['pro_id']?>&cat_id=<?= $list_sachtrongnuoc[$i]['cat_id']?>" title="" class="thumb">
                                        <img src="<?= $list_sachtrongnuoc[$i]['pro_image'] ?>">
                                    </a>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachtrongnuoc[$i]['pro_id']?>&cat_id=<?= $list_sachtrongnuoc[$i]['cat_id']?>" title="" class="product-name"><?=$list_sachtrongnuoc[$i]['pro_name']?></a>
                                    <div class="price">
                                        <span class="new"><?=currency_format($list_ot_product[$i]['original_price'])?></span>
                                        <span class="old"><?=currency_format($list_ot_product[$i]['promotional_price'])?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachtrongnuoc[$i]['pro_id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachtrongnuoc[$i]['pro_id']?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                    </div>
                                    </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>


   
            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title" style="margin-top: 0;">Sách Nước Ngoài</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (count($list_sachnuocngoai) > 0) {
                            for ($i = 0; $i < count($list_sachtrongnuoc); $i++) {?>
                                <li>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachnuocngoai[$i]['pro_id']?>&cat_id=<?= $list_sachnuocngoai[$i]['cat_id']?>" title="" class="thumb">
                                        <img src="<?= $list_sachnuocngoai[$i]['pro_image'] ?>">
                                    </a>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachnuocngoai[$i]['pro_id']?>&cat_id=<?= $list_sachnuocngoai[$i]['cat_id']?>" title="" class="product-name"><?=$list_sachnuocngoai[$i]['pro_name']?></a>
                                    <div class="price">
                                        <span class="new"><?=currency_format($list_ot_product[$i]['original_price'])?></span>
                                        <span class="old"><?=currency_format($list_ot_product[$i]['promotional_price'])?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachnuocngoai[$i]['pro_id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachnuocngoai[$i]['pro_id']?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                    </div>
                                    </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>


            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title" style="margin-top: 0;">Sách Thiếu Nhi</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (count($list_sachthieunhi) > 0) {
                            for ($i = 0; $i < count($list_sachthieunhi); $i++) {?>
                                <li>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachthieunhi[$i]['pro_id']?>&cat_id=<?= $list_ealist_sachthieunhirphone[$i]['cat_id']?>" title="" class="thumb">
                                        <img src="<?= $list_sachthieunhi[$i]['pro_image'] ?>">
                                    </a>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachthieunhi[$i]['pro_id']?>&cat_id=<?= $list_sachthieunhi[$i]['cat_id']?>" title="" class="product-name"><?=$list_sachthieunhi[$i]['pro_name']?></a>
                                    <div class="price">
                                        <span class="new"><?=currency_format($list_ot_product[$i]['original_price'])?></span>
                                        <span class="old"><?=currency_format($list_ot_product[$i]['promotional_price'])?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachthieunhi[$i]['pro_id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachthieunhi[$i]['pro_id']?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                    </div>
                                    </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>


            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title" style="margin-top: 0;">Sách Văn Học</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (count($list_sachvanhoc) > 0) {
                            for ($i = 0; $i < count($list_sachvanhoc); $i++) {?>
                                <li>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachvanhoc[$i]['pro_id']?>&cat_id=<?= $list_sachvanhoc[$i]['cat_id']?>" title="" class="thumb">
                                        <img src="<?= $list_sachvanhoc[$i]['pro_image'] ?>">
                                    </a>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachvanhoc[$i]['pro_id']?>&cat_id=<?= $list_sachvanhoc[$i]['cat_id']?>" title="" class="product-name"><?=$list_sachvanhoc[$i]['pro_name']?></a>
                                    <div class="price">
                                        <span class="new"><?=currency_format($list_sachvanhoc[$i]['promotional_price'])?></span>
                                        <span class="old"><?=currency_format($list_sachvanhoc[$i]['original_price'])?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachvanhoc[$i]['pro_id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachvanhoc[$i]['pro_id']?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                    </div>
                                    </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>


            <div class="section" id="list-product-wp">
                <div class="section-head">
                    <h3 class="section-title" style="margin-top: 0;">Sách Khoa Học</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item clearfix">
                        <?php if (count($list_sachkhoahoc) > 0) {
                            for ($i = 0; $i < count($list_sachkhoahoc); $i++) {?>
                                <li>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachkhoahoc[$i]['pro_id']?>&cat_id=<?= $list_sachkhoahoc[$i]['cat_id']?>" title="" class="thumb">
                                        <img src="<?= $list_sachkhoahoc[$i]['pro_image'] ?>">
                                    </a>
                                    <a href="?mod=product&act=detail&id=<?= $list_sachkhoahoc[$i]['pro_id']?>&cat_id=<?= $list_sachkhoahoc[$i]['cat_id']?>" title="" class="product-name"><?=$list_sachkhoahoc[$i]['pro_name']?></a>
                                    <div class="price">
                                        <span class="new"><?=currency_format($list_ot_product[$i]['original_price'])?></span>
                                        <span class="old"><?=currency_format($list_ot_product[$i]['promotional_price'])?></span>
                                    </div>
                                    <div class="action clearfix">
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachkhoahoc[$i]['pro_id']?>" title="Thêm giỏ hàng" class="add-cart fl-left">Thêm giỏ hàng</a>
                                        <a href="?mod=cart&act=add&pro_id=<?= $list_sachkhoahoc[$i]['pro_id']?>" title="Mua ngay" class="buy-now fl-right">Mua ngay</a>
                                    </div>
                                    </li>
                            <?php }?>
                        <?php } ?>
                    </ul>
                </div>
            </div>

        </div>
        <div class="sidebar fl-left">
            <div class="section" id="category-product-wp">
                <div class="section-head">
                    <h3 class="section-title">Danh mục sản phẩm</h3>
                </div>
                <div class="secion-detail">
                    <ul class="list-item">
                        <li>
                            <a href="?mod=product&act=main&cat_id=1" title="">Sách Mới Phát Hành</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=2" title="">Sách Trong Nước</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=3" title="">Sách Nước Ngoài</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=4" title="">Sách Thiếu Nhi</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=5" title="">Sách Văn Học</a>
                        </li>
                        <li>
                            <a href="?mod=product&act=main&cat_id=6" title="">Sách Khoa Học</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="section" id="selling-wp">
                <div class="section-head">
                    <h3 class="section-title">Sách bán chạy</h3>
                </div>
                <div class="section-detail">
                    <ul class="list-item">
                    <?php if (count($list_ot_product) > 0) {
                            for ($i = 0; $i < 4; $i++) {?>
                            <li class="clearfix">
                            <a href="?mod=product&act=detail&id=<?= $list_ot_product[$i]['pro_id']?>&cat_id=<?= $list_ot_product[$i]['cat_id']?>" title="" class="thumb fl-left">
                                <img src="<?= $list_ot_product[$i]['pro_image']?>" alt="">
                            </a>
                            <div class="info fl-right">
                                <a style="white-space: nowrap;overflow: hidden;text-overflow: ellipsis;" 
                                href="?mod=product&act=detail&id=<?= $list_ot_product[$i]['pro_id']?>&cat_id=<?= $list_ot_product[$i]['cat_id']?>" title="" class="product-name"> <?=$list_ot_product[$i]['pro_name']?></a>
                                <div class="price">
                                    <span class="new"><?=currency_format($list_ot_product[$i]['original_price'])?></span>
                                    <span class="old"><?=currency_format($list_ot_product[$i]['promotional_price'])?></span>
                                </div>
                                <a href="?mod=cart&act=main" class="buy-now">Mua ngay</a>
                            </div>
                        </li>
                        <?php }}?>
                        
                    </ul>
                </div>
            </div>
          
        </div>
    </div>
</div>
<?php get_component('footer'); ?>