<?php 
  //load file layout vao day de do du lieu cua view vao file layout do
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
 <?php if(isset($_SESSION["cart"])): ?>
 <!-- MAIN-CONTENT-SECTION START -->
    <section class="main-content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- BSTORE-BREADCRUMB START -->
            <div class="bstore-breadcrumb">
              <a href="index.html">HOMe</a>
              <span><i class="fa fa-caret-right "></i></span>
              <span>Your shopping cart</span>
            </div>
            <!-- BSTORE-BREADCRUMB END -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- SHOPPING-CART SUMMARY START -->
            <h2 class="page-title">Shopping-cart summary <span class="shop-pro-item">Your shopping cart contains: 2 products</span></h2>
            <!-- SHOPPING-CART SUMMARY END -->
          </div>  
          
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- SHOPING-CART-MENU START -->
            <div class="shoping-cart-menu">
              <ul class="step">
                <li class="step-current first">
                  <span>01. Summary</span>
                </li>
                <li class="step-todo second">
                  <span>02. Sign in</span>
                </li>
                <li class="step-todo third">
                  <span>03. Shipping</span>
                </li>
                
                <li class="step-todo last" id="step_end">
                  <span>04. Payment</span>
                </li>
              </ul>                 
            </div>
            <!-- SHOPING-CART-MENU END -->
            <!-- CART TABLE_BLOCK START -->
            <div class="table-responsive">
              <!-- TABLE START -->
              <table class="table table-bordered" id="cart-summary">
                <!-- TABLE HEADER START -->
                <thead>
                  <tr>
                    <th class="cart-product">Product</th>
                    <th class="cart-description">Description</th>
                    <th class="cart-avail text-center">Availability</th>
                    <th class="cart-unit text-right">Unit price</th>
                    <th class="cart_quantity text-center">Qty</th>
                    <th class="cart-delete">&nbsp;</th>
                    <th class="cart-total text-right">Total</th>
                  </tr>
                </thead>
                <!-- TABLE HEADER END -->
                <!-- TABLE BODY START -->
                <tbody> 
                  <!-- SINGLE CART_ITEM START -->
                  <?php foreach($_SESSION["cart"] as $product): ?>
                  <tr>
                    <td class="cart-product">
                      <a href="#"><img alt="Blouse" src="assets/upload/products/<?php echo $product["photo"]; ?>"></a>
                    </td>
                    <td class="cart-description">
                      <p class="product-name"><a href="index.php?controller=products&action=detail&id=<?php echo $product["id"]; ?>"><?php echo $product["name"]; ?></a></p>
                      <small><a href="#">Size : S, Color : Orange</a></small>
                    </td>
                    <td class="cart-avail"><span class="label label-success">In stock</span></td>
                    <td class="cart-unit">
                      <ul class="price text-right">
                        <li class="price">$<?php echo ($product['price']-$product['price']*$product['discount']/100); ?></li>
                      </ul>
                    </td>
                    <td class="cart_quantity text-center">
                      <div class="cart-plus-minus-button">
                        <input class="cart-plus-minus" type="number" name="product_<?php echo $product["id"]; ?>" value="<?php echo $product["number"]; ?>">
                      </div>
                    </td>
                    <td class="cart-delete text-center">
                      <span>
                        <a href="index.php?controller=cart&action=remove&id=<?php echo $product["id"]; ?>" class="cart_quantity_delete" title="Delete"><i class="fa fa-trash-o"></i></a>
                      </span>
                    </td>
                    <td class="cart-total">
                      <span class="price">$<?php echo ($product["number"]*($product['price']-$product['price']*$product['discount']/100)); ?></span>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                  <!-- SINGLE CART_ITEM END -->
                  <tfoot>
                  <tr>
                    <td colspan="9"><a href="index.php?controller=cart&action=destroy" class="btn btn-primary pull-left ">Xóa toàn bộ</a> <a href="index.php" class="btn btn-info pull-right">Tiếp tục mua hàng</a>
                      <?php if($this->cartNumber() > 0): ?>
                      <input type="submit" class="btn btn-primary pull-right" value="Cập nhật">
                    <?php endif; ?>   
                    </td>
                  </tr>
                </tfoot>
                </tbody>
                <!-- TABLE BODY END -->
                <!-- TABLE FOOTER START -->
                <tfoot> 
                <?php if($this->cartNumber() > 0): ?>                  
                  <tr class="cart-total-price">
                    <td class="cart_voucher" colspan="3" rowspan="4"></td>
                    <td class="text-right" colspan="3">Total products (tax excl.)</td>
                    <td id="total_product" class="price" colspan="1">$<?php echo ($this->cartTotal());?></td>
                  </tr>
                  <tr>
                    <td class="text-right" colspan="3">Total shipping</td>
                    <td id="total_shipping" class="price" colspan="1">$2.00</td>
                  </tr>
                  <tr>
                    <td class="text-right" colspan="3">Total vouchers (tax excl.)</td>
                    <td class="price" colspan="1">$0.00</td>
                  </tr>
                  <tr>
                    <td class="total-price-container text-right" colspan="3">
                      <span>Total</span>
                    </td>
                    <td id="total-price-container" class="price" colspan="1">
                      <span id="total-price">$<?php echo ($this->cartTotal() + 2.00);?></span>
                    </td>
                  </tr>
                  <?php endif; ?>
                </tfoot>    
                <!-- TABLE FOOTER END -->                 
              </table>
              <!-- TABLE END -->
            </div>
            <!-- CART TABLE_BLOCK END -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="first_item primari-box mycartaddress-info">
              <!-- SINGLE ADDRESS START -->
              <ul class="address">
                <li>
                  <h3 class="page-subheading box-subheading">
                    Delivery address (BootExperts Office)
                  </h3>
                </li>
                <li><span class="address_name">BootExperts</span></li>
                <li><span class="address_company">Web development Company</span></li>
                <li><span class="address_address1">Bonossri</span></li>
                <li><span class="address_address2">D-Block</span></li>
                <li><span class="">Rampura</span></li>
                <li><span class="">Dhaka</span></li>
                <li><span class="address_phone">+880 1735161598</span></li>
                <li><span class="address_phone_mobile">+880 1975161598</span></li>
              </ul> 
              <!-- SINGLE ADDRESS END -->
            </div>            
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="second_item primari-box mycartaddress-info">
              <!-- SINGLE ADDRESS START -->
              <ul class="address">
                <li>
                  <h3 class="page-subheading box-subheading">
                    Invoice address (BootExperts Home)
                  </h3>
                </li>
                <li><span class="address_name">BootExperts</span></li>
                <li><span class="address_company">Web development Company</span></li>
                <li><span class="address_address1">Dhaka</span></li>
                <li><span class="address_address2">Bonossri</span></li>
                <li><span class="">Dhaka-1205</span></li>
                <li><span class="">Rampura</span></li>
                <li><span class="address_phone">+880 1735161598</span></li>
                <li><span class="address_phone_mobile">+880 1975161598</span></li>
              </ul> 
              <!-- SINGLE ADDRESS END -->
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- RETURNE-CONTINUE-SHOP START -->
            <div class="returne-continue-shop">
              <a href="index.html" class="continueshoping"><i class="fa fa-chevron-left"></i>Continue shopping</a>
              <a href="index.php?controller=cart&action=checkout" class="procedtocheckout">Proceed to checkout<i class="fa fa-chevron-right"></i></a>
            </div>  
            <!-- RETURNE-CONTINUE-SHOP END -->            
          </div>
        </div>
      </div>
    </section>
    <!-- MAIN-CONTENT-SECTION END -->
<?php endif; ?>