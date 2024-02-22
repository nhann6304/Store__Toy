<div class="reset_container">
    <form action="index.php?action=forget&act=resetpass" method="post">
        <div class="reset__container-password">
            <div class="reset__container-banner">
                <div class="reset__container-resetpass">
                    <ol class="breadcrumbs__list">
                        <li class="breadcrumbs__item home__link">
                            <a class="breadcrumbs__link" href="/">
                                Trang chủ
                                <svg xmlns="http://www.w3.org/2000/svg" class="breadcrumbs__item home__link-icon"
                                    width="6" height="10" viewBox="0 0 6 10" fill="none">
                                    <path d="M1.66667 8.3335L5 5.00016L1.66667 1.66683" stroke="#8F8F8F"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a class="breadcrumbs__link" href="/account/login" aria-current="page">Tài khoản</a>
                        </li>
                    </ol>
                </div>
            </div>

            <div class="container-resset-pass">
                <div class="reset_container-title">
                    <h1 class="reset_container-text">Đặt lại mật khẩu</h1>
                </div>

                <div class="reset_container-notification">
                    <span class="reset_container-notification-text">Mật khẩu đã được gửi vào email của bạn vui lòng kiểm
                        tra và thay đổi mật khẩu</span>
                </div>

                <div class="reset_container-input">
                    <div class="reset__container-email-id">
                        <label for="" class="reset_container-input-email">Mật khẩu mới <span
                                class="reset__container-icon">*</span></label>
                        <input type="text" name="password" class="reset__container-input-email">
                        <small class="reset__container-erro-email">Không tìm thấy tài khoản nào dùng email đó.</small>
                    </div>
                </div>

                <div class="reset_container-input-controll">
                    <button name="submit_password" type="submit" class="reset_container-input-controll-btn">Gửi</button>
                    <a href="" class="reset_container-input-controll-cancel">Hủy</a>
                </div>
            </div>
        </div>
    </form>
</div>