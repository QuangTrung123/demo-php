 <div class="header-top">
      <div class="container">
        <div class="row">
          <!-- HEADER-LEFT-MENU START -->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="header-left-menu">
              <div class="welcome-info">
                Welcome <span>BootExperts</span>
              </div>
              <div class="currenty-converter">
                <form method="post" action="#" id="currency-set">
                  <div class="current-currency">
                    <span class="cur-label">Currency : </span><strong>USD</strong>
                  </div>
                  <ul class="currency-list currency-toogle">
                    <li>
                      <a title="Dollar (USD)" href="#">Dollar (USD)</a>
                    </li>
                    <li>
                    <a title="Euro (EUR)" href="#">Euro (EUR)</a>
                    </li>
                  </ul>
                </form>                 
              </div>
              <div class="selected-language">
                <div class="current-lang">
                  <span class="current-lang-label">Language : </span><strong>English</strong>
                </div>
                <ul class="languages-choose language-toogle">
                  <li>
                    <a href="#" title="English">
                      <span>English</span>
                    </a>
                  </li>
                  <li>
                    <a href="#" title="Français (French)">
                      <span>Tiếng việt</span>
                    </a>
                  </li>
                </ul>                   
              </div>
            </div>
          </div>
          <!-- HEADER-LEFT-MENU END -->
          <!-- HEADER-RIGHT-MENU START -->
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="header-right-menu">
              <nav>
                <ul class="list-inline">
                <?php if(isset($_SESSION["customer_email"])): ?>

                  <li><a href="#"> hello: <?php echo $_SESSION["customer_email"]; ?></a></li>
                  <li><a href="index.php?controller=account&action=orders">My Cart</a></li>
                  <li><a href="index.php?controller=account&action=logout">Sign Out</a></li>
                  
                  <?php else: ?>
                
                  <li><a href="#">Check Out</a></li>
                  <li><a href="#">Wishlist</a></li>
                  <li><a href="#">Creat Account</a></li>
                  <li><a href="index.php?controller=cart">My Cart</a></li>
                  <li><a href="index.php?controller=account&action=login">Sign in</a></li>
                  <?php endif; ?>
                </ul>                 
              </nav>
            </div>
          </div>
          <!-- HEADER-RIGHT-MENU END -->
        </div>
      </div>
    </div>
    <!-- HEADER-TOP END -->
    <!-- HEADER-MIDDLE START -->
    <section class="header-middle">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <!-- LOGO START -->
            <div class="logo">
              <a href="#"><img src="vendors/img/logo.png" alt="bstore logo" /></a>
            </div>
            <!-- LOGO END -->
            <!-- HEADER-RIGHT-CALLUS START -->
            <div class="header-right-callus">
              <h3>call us free</h3>
              <span>0123-456-789</span>
            </div>
            <!-- HEADER-RIGHT-CALLUS END -->
            <!-- CATEGORYS-PRODUCT-SEARCH START -->
            <div class="categorys-product-search" style="padding-left: 100px;">
             <!--  <form action="#" method="get" class="search-form-cat"> -->
                <div class="search-product form-group" style=" position: relative;">
                  
                  
                  <input style="width: 500px;" type="text" onkeyup="smartSearch();" value="" placeholder="Enter your search key ... " id="key" class="form-control search-form">
                  <button style="right: -15px;  " class="search-button" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
                  
                                 
                </div>
                <div id="boxSearch">
                    <ul>
                    </ul>
                  </div>   
                <style type="text/css">
                    #boxSearch{position: absolute; z-index: 1; width: 550px; background: white; display: none; height: 300px; overflow: scroll;}
                    #boxSearch ul{padding:0px; margin:0px; list-style: none;}
                    #boxSearch ul li{border-bottom: 1px solid #dddddd;}
                    #boxSearch img{width: 70px; margin-right: 5px;}
                  </style>
              <!-- </form> -->
            </div>
                  
                  <script type="text/javascript">      
                    function search(){
                      //lay gia tri cua id=key
                      var key = document.getElementById("key").value;
                      //den trang tim kiem
                      location.href="index.php?controller=search&action=search&key="+key;
                    }
                    function smartSearch(){
                      var key = document.getElementById("key").value;
                      if(key != "")
                        document.getElementById("boxSearch").setAttribute("style","display:block;");
                      else
                        document.getElementById("boxSearch").setAttribute("style","display:none;");
                      //---
                      $.ajax({
                        url: "index.php?controller=search&action=smartSearch&key="+key,          
                        success: function( result ) {
                          $("#boxSearch ul").empty();
                          $("#boxSearch ul").append(result);
                        }
                      });
                      //---
                    }
                  </script>
            <!-- CATEGORYS-PRODUCT-SEARCH END -->
          </div>
        </div>
      </div>
    </section>
    <!-- HEADER-MIDDLE END -->
    <!-- MAIN-MENU-AREA START -->
    <header class="main-menu-area">
      <div class="container">
        <div class="row">
          <!-- SHOPPING-CART START -->
           <?php 
              //lay so luong san pham trong gio hang
              $number = 0;
              if(isset($_SESSION["cart"])){
                foreach($_SESSION["cart"] as $product){
                  $number++;
                }
              }
           ?>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
            <div class="shopping-cart-out pull-right">
              <div class="shopping-cart">
                <a class="shop-link" href="index.php?controller=cart" title="View my shopping cart">
                  <i class="fa fa-shopping-cart cart-icon"></i>
                  <b>My Cart</b>
                  <span class="ajax-cart-quantity"><?php echo $number; ?></span>
                </a>
                <div class="shipping-cart-overly" style="overflow: auto;">
                  <?php if(isset($_SESSION["cart"])): ?>
                  <?php foreach($_SESSION["cart"] as $product): ?>
                  <div class="shipping-item">
                    <span class="cross-icon"><a href="index.php?controller=cart&action=remove&id=<?php echo $product["id"]; ?>"><i class="fa fa-times-circle"></i></a></span>
                    <div class="shipping-item-image">
                      <a  style="width: 100px; height: 100px;" href="index.php?controller=product&action=detail&id=<?php echo $product["id"]; ?>"><img src="assets/upload/products/<?php echo $product["photo"]; ?>" alt="<?php echo $product["name"]; ?>" title="<?php echo $product["name"]; ?>"  /></a>
                    </div>
                    <div class="shipping-item-text">
                       <a href="index.php?controller=product&action=detail&id=<?php echo $product["id"]; ?>" class="pro-cat"><?php echo $product["name"]; ?></a></span>
                      <p><?php echo $product["number"]; ?> x $<?php echo ($product["price"] - ($product["price"]*$product["discount"])/100); ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
                  <?php endif; ?>
          
                 
                  <div class="shipping-checkout-btn">
                    <a href="index.php?controller=cart">Check out <i class="fa fa-chevron-right"></i></a>
                  </div>
                    
                </div>
              </div>
            </div>
          </div>  
          <!-- SHOPPING-CART END -->
          <!-- MAINMENU START -->
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
            <div class="mainmenu">
              <nav>
                <ul class="list-inline mega-menu">
                  <li class="active"><a href="index.php">Home</a>
                  </li>
                  <?php 
                      $categories = $this->modelListCategories();
                   ?>
                   <?php foreach($categories as $rows): ?>
                  <li><a href="index.php?controller=products&action=categories&catid=<?php echo $rows->id; ?>"><?php echo $rows->name; ?> 
                    </a>
                    <div class="drodown-mega-menu" >
                      <div class="left-mega col-xs-6">
                        <div class="mega-menu-list">
                          <ul >
                               <?php 
                              $categoriesSub = $this->modelListCategoriesSub($rows->id);
                              ?>
                              <?php foreach($categoriesSub as $rowsSub): ?>
                              <li style="width: 50px;"><a style="width: 50px;" href="index.php?controller=products&action=categories&catid=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>     
                            <?php endforeach; ?> 
                          </ul>
                        </div>
                      </div>
                    </div>
                  </li>    
                  <?php endforeach; ?>
          
         
                  <li><a href="#">About us</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <!-- MAINMENU END -->
        </div>
        <div class="row">
          <!-- MOBILE MENU START -->
          <div class="col-sm-12 mobile-menu-area">
            <div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
              <span class="mobile-menu-title">MENU</span>
              <nav>
                <ul>
                  <li><a href="index.php">Home</a>                         
                  </li>               
                  <?php 
                      $categories = $this->modelListCategories();
                   ?>
                   <?php foreach($categories as $rows): ?>
                  <li><a href="index.php?controller=products&action=categories&catid=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                    <ul>                      
                      <?php 
                        $categoriesSub = $this->modelListCategoriesSub($rows->id);
                      ?>
                      <?php foreach($categoriesSub as $rowsSub): ?>
                      <li><a href="index.php?controller=products&action=categories&catid=<?php echo $rowsSub->id; ?>"><?php echo $rowsSub->name; ?></a></li>     
                      <?php endforeach; ?>
                      
                     </ul>                           
                      </li>
                      <?php endforeach; ?>         
                  <li><a href="#">About us</a></li>
                </ul>
              </nav>
            </div>            
          </div>
          <!-- MOBILE MENU END -->
        </div>
      </div>
    </header>
    <!-- MAIN-MENU-AREA END -->