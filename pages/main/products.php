<?php
$sql_sp = "SELECT * FROM tbl_sanpham ORDER BY id_sp ASC";
$query_sp = mysqli_query($connect, $sql_sp);

$sql_count_sp = "SELECT COUNT(*) FROM tbl_sanpham";
$query_count_sp = mysqli_query($connect, $sql_count_sp);
$total_sp = mysqli_fetch_array($query_count_sp)[0];
?>

<div class="product">
    <div class="container-xxl">
        <p class="product-heading mt-0 py-3 fs-5 fw-bold">Tất cả sản phẩm (<?php echo $total_sp ?>)</p>
        <div class="products-list row">
            <div class="col-3">
                <div class="card" style="width: 19rem;">
                    <div class="product-img">
                        <img src=".\admincp\modules\uploads\638072287029793818_Xiaomi-Redmi-10A-2GB-32GB-xam-1 (1).webp" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <a href="#" class="produce-name">Xiaomi Redmi 10A</a>
                        <span class="product-price">2.000.000đ</span>
                        <div class="product-properties">
                            <div class="property product-chipset">
                                <i class="fa-solid fa-microchip"></i> Snapdragon 870
                            </div>
                            <div class="property product-screen">
                                <i class="fa-solid fa-mobile-screen"></i> 6.67 Inch
                            </div>
                            <div class="property product-ram">
                                <i class="fa-solid fa-memory"></i> 3GB
                            </div>
                            <div class="property product-rom">
                                <i class="fa-solid fa-hard-drive"></i> 64GB
                            </div>
                            <div class="property product-battery">
                            <i class="fa-solid fa-battery-full"></i> 5000 mAh
                            </div>
                        </div>
                        <!-- <p class="product-text">
                            Redmi 10A là sản phẩm giá rẻ tiếp theo Xiaomi đem đến cho người dùng. Ở phân khúc giá, chiếc
                            điện thoại này sở hữu một màn hình lớn, camera kép, dung lượng pin khủng và một thiết kế độc
                            đáo. Đây sẽ là lựa chọn không thể tốt hơn dành cho người dùng phổ thông.
                        </p> -->
                        <div class="cart-button">
                            <a href="#" class="btn btn-primary">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>