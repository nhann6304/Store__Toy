<div class="pay__container">
    <?php if (!isset($_SESSION['makh']) || count($_SESSION['cart']) < 1):
        echo "<script> alert('Bạn chưa đăng nhập') </script>";
        echo '<meta http-equiv="refresh" content="0;url=index.php?action=dangky&dangnhap"/>';
        ?>

        <?php
    else:
        ?>
        <div class="pay__container-box-left pay__container-box-left-block">
            <div class="pay-left__header-logo">
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
            <div class="pay-left__breadcrumb">
                <span class="pay-left__breadcrumb-title">Giỏ hàng</span>
                <span class="pay-left__breadcrumb-spacing"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                        viewBox="0 0 6 10" fill="none">
                        <path d="M0 1L1 0L5 4L6 5L5 6L1 10L0 9L4 5" fill="#8F8F8F"></path>
                    </svg></span>
                <span class="pay-left__breadcrumb-title">Thông tin</span>
                <span class="pay-left__breadcrumb-spacing"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                        viewBox="0 0 6 10" fill="none">
                        <path d="M0 1L1 0L5 4L6 5L5 6L1 10L0 9L4 5" fill="#8F8F8F"></path>
                    </svg></span>
                <span class="pay-left__breadcrumb-title">Vận chuyển</span>
                <span class="pay-left__breadcrumb-spacing"><svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                        viewBox="0 0 6 10" fill="none">
                        <path d="M0 1L1 0L5 4L6 5L5 6L1 10L0 9L4 5" fill="#8F8F8F"></path>
                    </svg></span>
                <span class="pay-left__breadcrumb-title">Thanh toán</span>
            </div>

            <div class="pay-left__request">
                <div class="pay-left__request">
                    <input type="checkbox" class="pay-left__request-check_box">
                    <span class="pay-left__request-text">Yêu cầu xuất thông tin VAT</span>
                </div>

            </div>

            <div class="pay-left__contact">
                <div class="pay-left__contact-title">
                    <h3>Liên hệ</h3>
                </div>
                <span class="pay-left__contact-question">
                    <span class="pay-left__contact-question">Bạn đã có tài
                        khoản?
                    </span>
                    <a class="pay-left__contact-login" href="">Đăng nhập</a>
                </span>
            </div>
            <?php
            if (isset($_SESSION['sohoadon'])) {
                $masohd = $_SESSION['sohoadon'];
                $hd = new hoadon();
                $kh = $hd->selectThongTinKhachHangHoaDOn($masohd);
                $ngay = $kh['ngaydat'];
                $email = $kh['email'];
                $sdt = $kh['sodienthoai'];
                $tenkh = $kh['tenkh'];
            }
            ?>
            <div class="pay-left__contact-input">
                <input type="text" placeholder="Email" value="<?php echo $email ?>"
                    class="display-pay pay-left__contact-input-email">
            </div>

            <div class="pay-left__request">
                <div class="pay-left__request">
                    <input type="checkbox" class="pay-left__request-check_box">
                    <span class="pay-left__request-text">Gửi cho tôi tin tức và ưu đãi qua email</span>
                </div>

            </div>

            <div class="pay-left_information">
                <h3>Địa chỉ giao hàng</h3>
                <div class="pay-left_information-input">
                    <select name="countryCode" id="Select0" required="" autocomplete="shipping country"
                        class="pay-left_infomation-display-pay display-pay">
                        <option value="">Quốc gia/Vùng</option>
                        <option value="VN">Việt Nam</option>
                        <!-- Các option khác -->
                    </select>

                </div>

                <div class="pay-left_fullname">
                    <div class="pay-left_information-input">
                        <input type="text" placeholder="Tên" value="<?php echo $tenkh; ?>"
                            class="display-pay pay-left__information-input-firstname">
                    </div>


                    <div class="pay-left_information-input">
                        <input type="text" placeholder="Họ" class="display-pay pay-left__information-input-lastname">
                    </div>
                </div>

                <div class="pay-left_information-input">
                    <input type="text" placeholder="Số điện thoại" value="<?php echo $sdt ?>"
                        class="display-pay pay-left__information-input-address">
                </div>

                <div class="pay-left_fullname">
                    <div class="pay-left_information-input">
                        <input type="text" placeholder="Thành phố"
                            class="display-pay pay-left__information-input-firstname">
                    </div>

                    <div class="pay-left_information-input">
                        <input type="text" placeholder="Mã bưu chính"
                            class="display-pay pay-left__information-input-lastname">
                    </div>
                </div>
            </div>


            <div class="pay-left_controll">
                <div class="pay-left_controll-return">
                    <i class="home-filter__page-icon fa-solid fa-angle-right"></i>
                    <a href="#" class="pay-left_controll-return-text">Quay lại giỏ hàng</a>
                </div>

                <div class="pay-left_controll-retrun-btn">
                    <button type="submit" class="QT4by _1fragemg4 rqC98 hodFu _7QHNJ VDIfJ j6D1f janiy"><span
                            class="AjwsM">Chuyển đến phần vận chuyển</span>
                    </button>
                </div>
            </div>

        </div>
        <div class="pay__container-box-right">
            <div class="pay__container-checkout">
                <?php
                $j = 0;
                $sp = new hoadon();
                $sp = $hd->selectThongTinHHID($masohd);
                while ($set = $sp->fetch()):
                    $j++;
                    ?>

                    <div class="pay__checkout-info">
                        <div class="pay__checkout-img">
                            <img src="./assets/img/<?php echo $set['hinh'] ?>" alt="Đồ chơi Mặt Nạ Batman BATMAN 6068154"
                                height="64px" width="64px"
                                class="_1h3po424 _1fragemgc _1frageme8 _1fragemiz _1fragemj4 _1fragemje _1fragemj9 _1fragem34 _1fragem2o _1fragem3k _1fragem28 _1fragem50 _1fragem4g _1fragem5k _1fragem3w _1fragemek">
                        </div>
                        <span class="pay__checkout-name">
                            <?php echo $set['tenhh'] ?>
                        </span>

                        <span class="pay__checkout-price">
                            <?php echo number_format($set['dongia']) ?>đ

                        </span>
                    </div>
                <?php endwhile ?>
                <div class="pay__checkout-control">
                    <div class="pay__checkout-control-input">
                        <input type="text" placeholder="Mã giảm giá hoặc thẻ quà tặng">
                    </div>
                    <div class="pay__checkout-control-button">
                        <button>Áp dụng</button>
                    </div>
                </div>

                <div class="pay__checkout-sum-price">
                    <div class="pay__checkout-sum_price">
                        <span class="pay__checkout-sum_price-heading">Tổng tiền đơn hàng</span>
                        <span class="pay__checkout-sum_price-text">169.000d</span>
                    </div>

                    <div class="pay__checkout-sum_shipper">
                        <span class="pay__checkout-sum_price-shipper">Phí vận chuyển</span>
                        <span class="pay__checkout-sum_price-shipper-text">169.000d</span>
                    </div>

                    <div class="pay__checkout-sum_all-product">
                        <span class="pay__checkout-sum_all-product-heading">Tổng tiền đơn hàng</span>
                        <span class="pay__checkout-sum-currency">VNĐ</span>
                        <span class="pay__checkout-sum_all-product-text">
                            <?php $gh = new giohang();
                            echo $gh->getSubTotal();
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
    endif;
    ?>
</div>