<?php
if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
    ?>
    <div class="cart__container">
        <div class="cart__container-left">
            <div class="cart-left__header">
                <div class="cart-left__header-logo">
                    <a href="/" class="header__heading-link link link--text focus-inset">
                        <div class="header__heading-logo-wrapper">
                            <img src="//www.mykingdom.com.vn/cdn/shop/files/image_47.svg?v=1683551202&amp;width=600"
                                alt="MyKingdom"
                                srcset="//www.mykingdom.com.vn/cdn/shop/files/image_47.svg?v=1683551202&amp;width=200 200w, //www.mykingdom.com.vn/cdn/shop/files/image_47.svg?v=1683551202&amp;width=300 300w, //www.mykingdom.com.vn/cdn/shop/files/image_47.svg?v=1683551202&amp;width=400 400w"
                                width="200" height="61.53846153846154" loading="eager" class="header__heading-logo"
                                sizes="(min-width: 750px) 200px, 50vw">
                        </div>
                    </a>
                </div>
                <div class="cart-left__breadcrumb">
                    <span class="cart-left__breadcrumb-title">Giỏ hàng</span>
                    <span class="cart-left__breadcrumb-spacing"><svg xmlns="http://www.w3.org/2000/svg" width="6"
                            height="10" viewBox="0 0 6 10" fill="none">
                            <path d="M0 1L1 0L5 4L6 5L5 6L1 10L0 9L4 5" fill="#8F8F8F"></path>
                        </svg></span>
                    <span class="cart-left__breadcrumb-title">Thông tin</span>
                    <span class="cart-left__breadcrumb-spacing"><svg xmlns="http://www.w3.org/2000/svg" width="6"
                            height="10" viewBox="0 0 6 10" fill="none">
                            <path d="M0 1L1 0L5 4L6 5L5 6L1 10L0 9L4 5" fill="#8F8F8F"></path>
                        </svg></span>
                    <span class="cart-left__breadcrumb-title">Vận chuyển</span>
                    <span class="cart-left__breadcrumb-spacing"><svg xmlns="http://www.w3.org/2000/svg" width="6"
                            height="10" viewBox="0 0 6 10" fill="none">
                            <path d="M0 1L1 0L5 4L6 5L5 6L1 10L0 9L4 5" fill="#8F8F8F"></path>
                        </svg></span>
                    <span class="cart-left__breadcrumb-title">Thanh toán</span>
                </div>
                <!-- --------------------------------------------------------- -->
                <div class="cart-left__content">
                    <div class="cart-left__check">
                        <div class="cart-left__item-gift">
                            <p class="cart-left__item-gift-text">Bạn được miễn phí ship</p>
                        </div>
                    </div>

                    <?php
                    foreach ($_SESSION['cart'] as $key => $item):
                        ?>
                        <form action="index.php?action=giohang&act=update_cart" method="POST">
                            <div class="cart-left__info">
                                <div class="cart-left__info-img">
                                    <img src="./assets/img/<?php echo $item['hinh'] ?>" class="cart-item__image" alt="false"
                                        loading="lazy" width="150" height="150">
                                </div>
                                <div class="thy">
                                    <div class="cart-left__info-content">
                                        <div class="cart-left__info-heading">
                                            <h4>
                                                <?php echo $item['tenhh'] ?>
                                            </h4>
                                        </div>

                                        <div class="cart-left__info-controll">
                                            <label class="cart-left__info-controll-heading" for="">Số lượng: </label>
                                            <button
                                                class="cart-left__info-controll-btn cart-left__info-controll-plus decrease">-</button>
                                            <input
                                                class="cart-left__info-controll-result product_detail_commit-controll-quantity-input"
                                                type="text" name="newqty[<?php echo $key; ?>]"
                                                value="<?php echo $item['soluong'] ?>">
                                            <button
                                                class="cart-left__info-controll-btn cart-left__info-controll-minus increase">+</button>
                                        </div>

                                        <div class="cart-left__info-controll-delete">
                                            <a href="index.php?action=giohang&act=giohang_xoa&id=<?php echo $key; ?>">Xóa</a>
                                        </div>
                                    </div>
                                    <div class="cart-left__info-price">
                                        <?php echo number_format($item['dongia']) ?>đ
                                    </div>
                                </div>
                            </div>
                        </form>
                        <?php
                    endforeach;
                    ?>
                </div>
                <div class="cart-left__count">
                    <label>
                        Tổng cộng:
                    </label>
                    <span>2 Sản phẩm</span>
                </div>
            </div>
        </div>
        <!-- right -->
        <div class="cart__container-right">
            <div class="cart__container-right-header">
                <div class="cart__container-right-header-block">
                    <div class="cart__container-right-header-content">

                        <div class="cart__container-right-header-totals">
                            <h2 class="totals__subtotal">Tiền hàng hoá</h2>
                            <p class="totals__subtotal-value">
                                <?php
                                $gh = new giohang();
                                echo $gh->getSubTotal();
                                ?>
                            </p>
                        </div>

                        <div class="cart__container-right-header-totals">
                            <h2 class="totals__subtotal">Giảm giá</h2>
                            <ul class="totals__subtotal-value" role="list" aria-label="Giảm giá">
                                <li class="discounts__discount discounts__discount--position">0</li>
                            </ul>
                        </div>
                        <div class="cart__container-right-header-totals">
                            <h2 class="totals__subtotal">Tổng cộng</h2>
                            <p class="totals__subtotal-value">
                                <span id="revy-cart-subtotal-price">
                                    <?php
                                    $gh = new giohang();
                                    echo $gh->getSubTotal();
                                    ?>
                                </span>
                            </p>
                        </div>
                    </div>
                    <div class="cart__ctas">
                        <noscript>
                            <button type="submit" class="cart__update-button button button--secondary" form="cart">Cập
                                nhật</button>
                        </noscript>
                        <div class="product_detail_commit-addtocart">
                            <a href="index.php?action=thanhtoan" class="pay-to-cart-button">Thanh toán ngay</a>
                        </div>
                    </div>
                    <div class="cart__container-right-header-check-box">
                        <input type="checkbox" id="agree-terms" name="check-box">
                        <label for="cart__container-right-header-custom">
                            Tôi đã đọc và đồng ý với
                            <a class="cart__container-right-header-link"
                                href="https://mykingdom-vietnam.myshopify.com/pages/dieu-khoan-va-dieu-kien-bao-ve-du-lieu-ca-nhan"
                                target="_blank">
                                điều khoản
                            </a>
                            và
                            <a class="cart__container-right-header-link"
                                href="https://mykingdom-vietnam.myshopify.com/pages/payment" target="_blank">
                                điều kiện thanh toán
                            </a>
                        </label>
                    </div>
                    <small class="cart__container-right-header-contact">

                        <div class="contact-login" data-btn-toggle="">
                            <a href="#"> Đăng nhập</a>
                        </div>

                        <span class="contact-text">Hoặc</span>

                        <div class="contact-regiester" data-btn-toggle="">
                            <a href="#"> Đăng ký</a>

                        </div>

                        <span class="contact-text">
                            để mua hàng với nhiều ưu đãi hơn
                        </span>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <?php
} else {
    echo ' <script>alert("Giỏ hàng chưa có hàng")</script>  <script>';
    echo '<meta http-equiv="refresh" content="0;url=index.php?action=home"/>';
}
?>