load file layout chung -->
<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
<!-- <div class="template-customer">
          <h1>Đăng nhập tài khoản</h1>
          <p>Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
          <div class="row" style="margin-top:50px;">
            <div class="col-md-6">
              <div class="wrapper-form">
                <form method='post' action="index.php?controller=account&action=loginPost">
                  <p class="title"><span>Đăng nhập tài khoản</span></p>
                  <div class="form-group">
                    <label>Email:<b id="req">*</b></label>
                    <input type="email" class="input-control" name="email" required="">
                  </div>
                  <div class="form-group">
                    <label>Mật khẩu:<b id="req">*</b></label>
                    <input type="password" class="input-control" name="password" required="">
                  </div>
                  <input type="submit" class="button" value="Đăng nhập">
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="wrapper-form">
                <p class="title"><span>Tạo tài khoản mới</span></p>
                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                <a href="AccountRegisterView.php" class="button">Đăng ký</a> </div>
            </div>
          </div>
        </div>
         -->
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <!-- BSTORE-BREADCRUMB START -->
      <div class="bstore-breadcrumb">
        <a href="index.html">HOMe</a>
        <span><i class="fa fa-caret-right "></i></span>
        <span>Sign in / Register</span>
      </div>
      <!-- BSTORE-BREADCRUMB END -->
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <h2 class="page-title">Sign in / Register</h2>
    </div>  
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <!-- SHOPING-CART-MENU START -->
      <div class="shoping-cart-menu">
        <ul class="step">
          <li class="step-todo first step-done">
            <span><a href="cart.html">01. Summary</a></span>
          </li>
          <li class="step-current second">
            <span>02. Sign in</span>
          </li>

          <li class="step-todo four">
            <span>03. Shipping</span>
          </li>
          <li class="step-todo last" id="step_end">
            <span><em>04.</em> Payment</span>
          </li>
        </ul>                 
      </div>
      <!-- SHOPING-CART-MENU END -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <!-- CREATE-NEW-ACCOUNT START -->
      <div class="create-new-account">
        <form class="new-account-box primari-box" id="create-new-account" method="post" action="#">
          <h3 class="box-subheading">Create an account</h3>
          <div class="form-content">
            <p>Please enter your email address to create an account.</p>
            <div class="form-group primary-form-group">
              <label for="email">Email address</label>
              <input type="text" value="" name="email" id="email" class="form-control input-feild" required>
            </div>
            <div class="submit-button">
              <a href="index.php?controller=account&action=register" id="SubmitCreate" class="btn main-btn">
                <span>
                  <i class="fa fa-user submit-icon"></i>
                  Create an account
                </span>                     
              </a>
            </div>
          </div>
        </form>             
      </div>
      <!-- CREATE-NEW-ACCOUNT END -->
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
      <!-- REGISTERED-ACCOUNT START -->
      <div class="primari-box registered-account">
        <form class="new-account-box" id="accountLogin" method="post" action="index.php?controller=account&action=loginPost">
          <h3 class="box-subheading">Already registered?</h3>
          <div class="form-content">
            <div class="form-group primary-form-group">
              <label for="loginemail">Email address</label>
              <input type="text" value="" name="email" id="loginemail" class="form-control input-feild">
            </div>
            <div class="form-group primary-form-group">
              <label for="password">Password</label>
              <input type="password" value="" name="password" id="password" class="form-control input-feild">
            </div>
            <div class="forget-password">
              <p><a href="#">Forgot your password?</a></p>
            </div>
            <input type="submit" class="btn btn-danger" style="font-size: 20px;" value="Sign in">
            <!-- <div class="submit-button">
              <a href="index.php?controller=account&action=register" id="signinCreate" class="btn main-btn">
                <span>
                  <i class="fa fa-lock submit-icon"></i>
                  Sign in
                </span>
              </a>
            </div> -->
          </div>
        </form>             
      </div>
      <!-- REGISTERED-ACCOUNT END -->
    </div>        
  </div>
</div>
</section>
<!-- MAIN-CONTENT-SECTION END