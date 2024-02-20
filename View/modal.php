<div class="modal">
    <div class="modal__overlay"></div>

    <div class="modal__body">
        <!-- Register form -->
        <div class="auth-form auth-form-login">
            <form action="index.php?action=dangky&act=dangky_action" method="POST">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng ký</h3>
                        <span class="auth-form__switch-btn">Đăng nhập</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input name="txtname" type="text" class="auth-form__input" placeholder="Nhập tên đăng nhập">
                        </div>

                        <div class="auth-form__group">
                            <input name="txtemail" type="text" class="auth-form__input" placeholder="Nhập email">
                        </div>

                        <div class="auth-form__group">
                            <input name="txtphone" type="text" class="auth-form__input"
                                placeholder="Nhập số điện thoại">
                        </div>

                        <div class="auth-form__group">
                            <input name="txtpassword" type="password" class="auth-form__input"
                                placeholder="Nhập password">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <p class="auth-form__policy-text">
                            Bằng việc đăng ký, bạn đã đồng ý với Wed Nhân về
                            <a href="" class="ath-form__text-link">Điều khoản dịch vụ</a> &
                            <a href="" class="ath-form__text-link">Chính sách bảo mật</a>
                        </p>
                    </div>

                    <div class="auth-form__controls">
                        <a href="#" class="btn auth-form__controls-back btn--normal">TRỞ LẠI</a>
                        <button type="submit" name="submit" class="btn btn--primary">ĐĂNG KÝ</button>
                    </div>
                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--witdh-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>

                    <a href="" class="auth-form__socials--google btn btn--size-s btn--witdh-icon">
                        <i class="fab fa-google fa-2x"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </form>
        </div>

        <!-- Login form -->
        <div class="auth-form auth-form-Register">
            <form action="index.php?action=dangnhap&act=dangnhap_action" method="POST">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h3 class="auth-form__heading">Đăng nhập</h3>
                        <span class="auth-form__switch-btn">Đăng ký</span>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input name="txtemail" type="text" class="auth-form__input" placeholder="Nhập email">
                        </div>

                        <div class="auth-form__group">
                            <input name="txtpassword" type="password" class="auth-form__input"
                                placeholder="Nhập password">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot ">Quên mật khẩu</a>
                            <span class="auth__help-separete"></span>
                            <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                        </div>
                    </div>

                    <div class="auth-form__controls">
                        <a class="btn auth-form__controls-back btn--normal">TRỞ LẠI</a>
                        <button class="btn btn--primary">ĐĂNG NHẬP </button>
                    </div>
                </div>
                <div class="auth-form__socials">
                    <a href="" class="auth-form__socials--facebook btn btn--size-s btn--witdh-icon">
                        <i class="auth-form__socials-icon fa-brands fa-square-facebook"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Facebook
                        </span>
                    </a>

                    <a href="" class="auth-form__socials--google btn btn--size-s btn--witdh-icon">
                        <i class="fab fa-google fa-2x"></i>
                        <span class="auth-form__socials-title">
                            Kết nối với Google
                        </span>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>