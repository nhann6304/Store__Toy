<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hh = new hanghoa();
    $sp = $hh->getHangHoaid($id);
}
?>

<div class="product__details">
    <?php
    $hh = new hanghoa();
    $sp = $hh->getHangHoaid($id);
    $tenhh = $sp['tenhh'];
    ?>
    <nav class="product-details__path" role="navigation" aria-label="breadcrumbs">
        <div class="path-width">
            <ul class="path__list">
                <li class="path__list-item">
                    <a class="path__list-item-link" href="/">
                        Trang chủ
                        <svg xmlns="http://www.w3.org/2000/svg" class="path__list-item-link-icon" width="6" height="10"
                            viewBox="0 0 6 10" fill="none">
                            <path d="M1.66667 8.3335L5 5.00016L1.66667 1.66683" stroke="#8F8F8F" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                </li>
                <li class="path__list-item">
                    <a class="path__list-item-link path__list-item-link-text-path"
                        href="/products/chiec-giuong-am-ap-510147" aria-current="page">
                        <?php echo $tenhh ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- ------------------------------------------------------------------------- -->
<div class="row__detailed-products">
    <?php
    $hh = new hanghoa();
    $sp = $hh->getHangHoaid($id);
    $tenhh = $sp['tenhh'];
    $mota = $sp['mota'];
    $dongia = $sp['dongia'];
    $giamgia = $sp['giamgia'];
    $hinh = $sp['hinh'];
    $maloai = $sp['iploai'];
    ?>
    <div class="col-7-2">
        <img src="./assets/img/<?php echo $hinh ?>" alt="LEGO Wheels">
    </div>
    <div class="col-5-2">
        <div class="product__detail-title">
            <h3>
                <?php echo $tenhh ?>
            </h3>
        </div>
        <div class="product__detail-code">
            <span class="product__detail-code-id">
                Mã loại:
            </span>
            <span class="product__detail-code-id-node">
                <?php echo $maloai ?>
            </span>
        </div>

        <div class="rating psstar" data-pid=<?php echo $id ?>>
            <span class="rating-value">Đánh giá</span>

            <span data-set="$i" class=""></span>
            <span class="star"></span>
            <span class="star"></span>
            <span class="star"></span>
            <span class="star yellow"></span>
        </div>

        <div class="product__detail-price">
            <div class="product__detai-price-new">
                <span class="product__detai-number-nameprice">Giảm: </span>
                <span class="product__detai-number-price-new">
                    <?php echo number_format($giamgia) ?> VNĐ
                </span>
            </div>
        </div>

        <div class="product__detail-price">
            <div class="product__detai-price-new">
                <span class="product__detai-number-nameprice">Giá thanh toán: </span>
                <span class="product__detai-number-price-new">
                    <?php echo number_format($dongia - $giamgia) ?> VNĐ
                </span>
            </div>
        </div>
        <div class="product_detail_commit">
            <ul class="product_detail_commit-list">
                <li class="product_detail_commit-item">
                    <svg class="product_detail_commit-list-icon" width="18" height="14" viewBox="0 0 18 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 1L6 13L1.5 8.5" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="product_detail_commit-list-text">Hàng chính hãng</span>
                </li>

                <li class="product_detail_commit-item">
                    <svg class="product_detail_commit-list-icon" width="18" height="14" viewBox="0 0 18 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 1L6 13L1.5 8.5" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="product_detail_commit-list-text">Miễn Phí Giao Hàng Toàn Quốc Đơn Trên 500k</span>
                </li>

                <li class="product_detail_commit-item">
                    <svg class="product_detail_commit-list-icon" width="18" height="14" viewBox="0 0 18 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.5 1L6 13L1.5 8.5" stroke="black" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>
                    <span class="product_detail_commit-list-text">Giao Hàng Hỏa Tốc 4 Tiếng</span>
                </li>
            </ul>
        </div>

        <div class="product_detail-commit_description">
            <form action="index.php?action=giohang&act=giohang_action" method="post">
                <input type="hidden" name="mahh" value="<?php echo $id ?>">
                <input type="hidden" id="result-input" name="soluong" value="1">

                <div class="product_detail_commit-quantity">
                    <div class="product_detail_commit-quantity-text">Số lượng</div>
                </div>
                <div class="product_detail_commit-controll">
                    <div class="product_detail_commit-controll-quantity">
                        <a class="product_detail_commit-controll-quantity-btn decrease">-</a>
                        <div class="input-text">
                            <input class="product_detail_commit-controll-quantity-input" type="text" inputmode="numeric"
                                name="quantity" id="Quantity" data-cart-quantity="0" data-min="1" min="1" step="1"
                                value="1" max="null">
                        </div>
                        <a class="product_detail_commit-controll-quantity-btn increase">+</a>
                    </div>
                    <div class="product_detail_commit-addtocart">
                        <button type="submit" name="submit" class="add-to-cart-button">Thêm vào giỏ hàng</button>
                    </div>
                </div>
            </form>




            <div class="product_detail-commit_description-text">Mô tả sản phẩm</div>
            <div class="product_detail-commit_description-name">
                <h3>
                    <?php echo $tenhh ?>
                </h3>
            </div>

            <div class="product_detail-commit_description-item">
                <div class="product_detail-commit_description-content">
                    <p>
                        <?php echo $mota ?>
                    </p>
                </div>
                <a class="show-more-btn">Xem thêm</a>
            </div>
            <?php
            if (isset($_SESSION['makh'])):

                ?>
                <!-- Phần bình luận -->
                <div class="comments-section">
                    <!-- Form bình luận -->
                    <form id="comment-form" action="index.php?action=binhluan" method="post">
                        <input type="hidden" name="mahh" value="<?php echo $id; ?>">
                        <textarea name="comment" placeholder="Nhập bình luận của bạn" required></textarea>
                        <button type="submit">Gửi</button>
                    </form>
                    <?php
            endif;
            ?>
                <!-- Danh sách bình luận -->
                <div class="comment-list">
                    <!-- Bình luận mẫu -->
                    <?php
                    $bl = new binhluan();
                    $noidung = $bl->selectBinhLuan($id);
                    while ($set = $noidung->fetch()):
                        ?>
                        <div class="comment">
                            <div class="comment-header">
                                <span class="author">
                                    <?php echo $set['tenkh'] ?>
                                </span>
                                <span class="timestamp">2 phút trước</span>
                            </div>
                            <p>
                                <?php echo $set['content'] ?>
                            </p>
                        </div>
                        <!-- Kết thúc bình luận mẫu -->
                        <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var stars = {
        init: function () {
            for (let docket of document.getElementsByClassName("psstar")) {
                for (let star of docket.getElementsByTagName("span")) {
                    star.addEventListener("click")
                }
            }
        }
    }
    window.addEventListener('DOMContentLoaded', stars.init);
</script>