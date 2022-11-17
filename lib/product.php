<?php 
// lấy danh sách sản phẩm theo ma danh mục 
function get_list_product_by_catid($cat_id) { 
    global $con;
    $sql = "select * from tbl_product where cat_id = {$cat_id} and status_pro=0";
    $result = mysqli_query($con, $sql); 
    $list_product = array();
    while ($row = mysqli_fetch_array($result)) {
        $list_product[] = $row;
    }
    return $list_product;
}

function get_list_product() { 
    global $con;
    $sql = "select * from tbl_product where status_pro=0";
    $result = mysqli_query($con, $sql); 
    $list_product = array();
    while ($row = mysqli_fetch_array($result)) {
        $list_product[] = $row;
    }
    return $list_product;
}
// Lấy tên danh mục theo mã danh mục
function get_category_by_catid($cat_id) { 
    global $con;
    $sql = "select cat_name from tbl_category where cat_id = {$cat_id} and status_cat=0";
    $result = mysqli_query($con, $sql);  

    while ($row = mysqli_fetch_array($result)) {
        echo $row["cat_name"];
    }

}

// lấy thông tin một sản phẩm theo id 
function get_product_info_by_proid($pro_id) {
    global $con;
    $sql = "select * from tbl_product where pro_id = {$pro_id} and status_pro=0";
    $result = mysqli_query($con, $sql);  

    if (mysqli_num_rows($result)) {
        $info = mysqli_fetch_array($result);
    }
    return $info;
}

// Lấy sản phẩm nổi bật
function get_list_outstanding_product()
{
    
    global $con;
    $sql = "with tab as (
        SELECT pro_id, sum(quantity) sl FROM `tbl_orderdetail` group by pro_id
        )
        select tbl_product.*, tab.sl from tbl_product inner join tab on tbl_product.pro_id = tab.pro_id where  status_pro=0 ORDER by sl DESC ";
    $result = mysqli_query($con, $sql);
    $list_otd_p = array();
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($list_otd_p, $row);
        }
    }
    return $list_otd_p;
}


function filter_product(){
    $sql="";
    
    if (isset($_GET["cat_id"])) {
        if($_POST['select'] != 0){
            $cat_id =  $_GET["cat_id"];
            switch ($_POST['select']){
                case 1:
                    $sql  = "SELECT * FROM tbl_product where cat_id = $cat_id ORDER BY pro_name ASC";
                    break;
                case 2:
                    $sql  = "SELECT * FROM tbl_product where cat_id = $cat_id ORDER BY pro_name DESC";
                    break;
                case 3:
                    $sql  = "SELECT * FROM tbl_product where cat_id = $cat_id ORDER BY original_price DESC";
                    break;
                case 4:
                    $sql  = "SELECT * FROM tbl_product where cat_id = $cat_id ORDER BY original_price ASC";
                    break;
                default:
                    $sql="";
            }
        }
    }
    else {
        if($_POST['select'] != 0){
            switch ($_POST['select']){
                case 1:
                    $sql  = "SELECT * FROM tbl_product ORDER BY pro_name ASC";
                    break;
                case 2:
                    $sql  = "SELECT * FROM tbl_product ORDER BY pro_name DESC";
                    break;
                case 3:
                    $sql  = "SELECT * FROM tbl_product ORDER BY original_price DESC";
                    break;
                case 4:
                    $sql  = "SELECT * FROM tbl_product ORDER BY original_price ASC";
                    break;
                default:
                    $sql="";
            }
        }
    }
    
    global $con;
    $result = mysqli_query($con, $sql);
    $list_sp = array();
        if (mysqli_num_rows($result)>0) {
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($list_sp,$row);
            }
        
    }
    return $list_sp;
}

function get_list_product_by_seach($info) {
    global $con;
    $sql = "select * from tbl_product where pro_name like '%$info%' ";
    $result = mysqli_query($con, $sql);
    $list_sp = array();
    if (mysqli_num_rows($result)) {
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($list_sp, $row);
        }
    }
    return $list_sp;
}


// Kiểm tra xem còn hàng không
function check_product($quantity) {
    if ($quantity <= 0) return false;
    else return true;
}
?>