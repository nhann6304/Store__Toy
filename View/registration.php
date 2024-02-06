<link rel="stylesheet" href="logincssjs/style.css">

<h2>ĐĂNG NHẬP/ĐĂNG KÝ</h2>
<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form class="formlogin" action="index.php?action=dangky&act=dangky_action" method="post">
      <h1>TẠO TÀI KHOẢN</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>Hoặc sử dụng email của bạn để đăng ký </span>
      <input type="text" name="txtname" placeholder="Name" />
      <input type="email" name="txtemail" placeholder="Email" />
      <input type="password" name="txtpassword" placeholder="Password" />
      <button type="submit" name="submit">ĐĂNG KÝ</button>
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form class="formlogin" method="post" action="index.php?action=dangnhap&act=dangnhap_action">
      <h1>ĐĂNG NHẬP</h1>
      <div class="social-container">
        <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="social"><i class="fab fa-goog  le-plus-g"></i></a>
        <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
      </div>
      <span>Hoặc sử dụng tài khoản của bạn</span>
      <input type="name" name="txtname" placeholder="name" />
      <input type="password" name="txtpassword" placeholder="Password" />
      <a href="index.php?action=forget">Quên mật khẩu?</a>
      <button type="submit" name="submit">ĐĂNG NHẬP</button>
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>CHÀO MỪNG TRỞ LẠI!</h1>
        <p style="color:black;">Để duy trì kết nối với chúng tôi vui lòng đăng nhập bằng thông tin cá nhân của bạn</p>
        <button class="ghost" id="signIn">ĐĂNG NHẬP</button>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Chào, Bạn!</h1>
        <p style="color:black;">Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
        <button class="ghost" id="signUp">ĐĂNG KÝ</button>
      </div>
    </div>
  </div>
</div>