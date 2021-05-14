<?php 
  //load file layout vao day de do du lieu cua view vao file layout do
  $this->layoutPath = "LayoutTrangTrong.php";
 ?>
 <?php 
    $fromPrice = isset($_GET["fromPrice"])?$_GET["fromPrice"]:0;
    $toPrice = isset($_GET["toPrice"])?$_GET["toPrice"]:0;
  ?>
        <!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <!-- BSTORE-BREADCRUMB START -->
            <div class="bstore-breadcrumb">
              <a href="index.html">HOMe</a>
              <span><i class="fa fa-caret-right"></i></span>
              <span>tìm kiếm
                        
                       </span>
            </div>
            <!-- BSTORE-BREADCRUMB END -->
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
            <!-- PRODUCT-LEFT-SIDEBAR START -->
            <div class="product-left-sidebar">
              <h2 class="left-title pro-g-page-title">Catalog</h2>
              <!-- SINGLE SIDEBAR ENABLED FILTERS START -->
              <div class="product-single-sidebar">
                <span class="sidebar-title">ENABLED FILTERS:</span>
                <ul class="filtering-menu">
                  <li>
                    Categories: Dresses 
                    <a href="#"><i class="fa fa-remove"></i></a>
                  </li>
                  <li>
                    Avaiale: In stock 
                    <a href="#"><i class="fa fa-remove"></i></a>
                  </li>
                  <li>
                    Categories: Dresses 
                    <a href="#"><i class="fa fa-remove"></i></a>
                  </li>
                </ul>
              </div>
              <!-- SINGLE SIDEBAR ENABLED FILTERS END -->
              <!-- SINGLE SIDEBAR CATEGORIES START -->
              <div class="product-single-sidebar">
                <span class="sidebar-title">Categories</span>
                <ul>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="categories"/>
                      <span></span>
                    </label>
                    <a href="#">Tops<span> (12)</span></a>
                  </li>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="categories"/>
                      <span></span>
                    </label>
                    <a href="#">Dresses<span> (13)</span></a>
                  </li>
                </ul>
              </div>
              <!-- SINGLE SIDEBAR CATEGORIES END -->
              <!-- SINGLE SIDEBAR AVAILABILITY START -->
              <div class="product-single-sidebar">
                <span class="sidebar-title">Availability</span>
                <ul>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="availability"/>
                      <span></span>
                    </label>
                    <a href="#">In stock<span> (13)</span></a>
                  </li>
                </ul>
              </div>
              <!-- SINGLE SIDEBAR AVAILABILITY END -->
              <!-- SINGLE SIDEBAR CONDITION START -->
              <div class="product-single-sidebar">
                <span class="sidebar-title">Condition</span>
                <ul>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="condition"/>
                      <span></span>
                    </label>
                    <a href="#">new<span> (13)</span></a>
                  </li>
                </ul>
              </div>
              <!-- SINGLE SIDEBAR CONDITION END -->
              <!-- SINGLE SIDEBAR MANUFACTURER START -->
              <div class="product-single-sidebar">
                <span class="sidebar-title">Manufacturer</span>
                <ul>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="manufacturer"/>
                      <span></span>
                    </label>
                    <a href="#">Fashion Manufacturer<span> (13)</span></a>
                  </li>
                </ul>
              </div>
              <!-- SINGLE SIDEBAR MANUFACTURER END -->
              <!-- SINGLE SIDEBAR PRICE START -->
              <div class="panel panel-default" style="margin-top:15px;">
                <div class="panel-heading"> Range </div>
                <div class="panel-body">
                  <ul class="list-group" style="border:0px;">
                    <li class="list-group-item" style="border:0px;">from &nbsp;&nbsp;
                      <input type="number" min="0" id="fromPrice" class="form-control" placeholder="$" />
                    </li>
                    <li class="list-group-item" style="border:0px;">to &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <input type="number" min="0"  id="toPrice" class="form-control" placeholder="$"/>
                    </li>
                    <li class="list-group-item" style="border:0px; text-align:center">
                      <input type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&action=searchPrice&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
                    </li>
                  </ul>
                </div>
              </div>
              <!-- SINGLE SIDEBAR PRICE END -->
              <!-- SINGLE SIDEBAR SIZE START -->
              <div class="product-single-sidebar">
                <span class="sidebar-title">Size</span>
                <ul>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="Size"/>
                      <span></span>
                    </label>
                    <a href="#">S<span> (10)</span></a>
                  </li>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="Size"/>
                      <span></span>
                    </label>
                    <a href="#">m<span> (10)</span></a>
                  </li>
                  <li>
                    <label class="cheker">
                      <input type="checkbox" name="Size"/>
                      <span></span>
                    </label>
                    <a href="#">l<span> (10)</span></a>
                  </li>
                </ul>
              </div>
              <!-- SINGLE SIDEBAR SIZE END -->
              <!-- SINGLE SIDEBAR COLOR START -->
              <div class="product-single-sidebar">
                <span class="sidebar-title">Color</span>
                <ul class="product-color-var">
                  <li>
                    <i class="fa fa-square color-beige"></i>
                    <a href="#">Beige<span> (1)</span></a>
                  </li>
                  <li>
                    <i class="fa fa-square color-white"></i>
                    <a href="#">white<span> (2)</span></a>
                  </li> 
                  <li>
                    <i class="fa fa-square color-black"></i>
                    <a href="#">black<span> (2)</span></a>
                  </li>                 
                  <li>
                    <i class="fa fa-square color-orange"></i>
                    <a href="#">orange<span> (5)</span></a>
                  </li>
                  <li>
                    <i class="fa fa-square color-blue"></i>
                    <a href="#">blue<span> (8)</span></a>
                  </li>
                  <li>
                    <i class="fa fa-square color-green"></i>
                    <a href="#">green<span> (3)</span></a>
                  </li>
                  <li>
                    <i class="fa fa-square color-yellow"></i>
                    <a href="#">yellow<span> (4)</span></a>
                  </li>
                  <li>
                    <i class="fa fa-square color-pink"></i>
                    <a href="#">pink<span> (6)</span></a>
                  </li>
                </ul>
              </div>
              <!-- SINGLE SIDEBAR COLOR END -->
              
              
              
            </div>
            <!-- PRODUCT-LEFT-SIDEBAR END -->
            <!-- SINGLE SIDEBAR TAG START -->
            <div class="product-left-sidebar">
              <h2 class="left-title">Tags </h2>
              <div class="category-tag">
                <a href="#">fashion</a>
                <a href="#">handbags</a>
                <a href="#">women</a>
                <a href="#">men</a>
                <a href="#">kids</a>
                <a href="#">New</a>
                <a href="#">Accessories</a>
                <a href="#">clothing</a>
                <a href="#">New</a>
              </div>
            </div>
            <!-- SINGLE SIDEBAR TAG END -->
          </div>
          <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
            <div class="right-all-product">
              <!-- PRODUCT-CATEGORY-HEADER START -->
              <div class="product-category-header">
                <div class="category-header-image">
                  <img src="vendors/img/category-header.jpg" alt="category-header" />
                  <div class="category-header-text">
                    <h2>Women </h2>
                    <strong>You will find here all woman fashion collections.</strong>
                    <p>This category includes all the basics of your wardrobe and much more:<br /> shoes, accessories, printed t-shirts, feminine dresses, women's jeans!</p>
                  </div>                  
                </div>
              </div>
              <!-- PRODUCT-CATEGORY-HEADER END -->
              <div class="product-category-title">
                <!-- PRODUCT-CATEGORY-TITLE START -->
                <h1>
                  <span class="cat-name">Women</span>
                  <span class="count-product">There are 13 products.</span>
                </h1>
                <!-- PRODUCT-CATEGORY-TITLE END -->
              </div>
              <div class="product-shooting-area">
                <div class="product-shooting-bar">
                  <!-- SHOORT-BY START -->
                  <div class="shoort-by">
                    <label for="productShort">Sort by</label>
                    <div class="short-select-option">
                      <select name="sortby" id="productShort">
                        <option value="">--</option>
                        <option value="">Price: Lowest first</option>
                        <option value="">Price: Highest first</option>
                        <option value="">Product Name: A to Z</option>
                        <option value="">Product Name: Z to A</option>
                        <option value="">In stock</option>
                        <option value="">Reference: Lowest first</option>
                        <option value="">Reference: Highest first</option>
                      </select>                       
                    </div>
                  </div>
                  <!-- SHOORT-BY END -->
                  <!-- SHOW-PAGE START -->
                  <div class="show-page">
                    <label for="perPage">Show</label>
                    <div class="s-page-select-option">
                      <select name="show" id="perPage">
                        <option value="">8</option>
                        <option value="">12</option>
                      </select>                         
                    </div>
                    <span>per page</span>                   
                  </div>
                  <!-- SHOW-PAGE END -->
                  <!-- VIEW-SYSTEAM START -->
                  <div class="view-systeam">
                    <label for="perPage">View:</label>
                    <ul>
                      <li class="active"><a href="#"><i class="fa fa-th-large"></i></a><br />Grid</li>
                      <li><a href="#"><i class="fa fa-th-list"></i></a><br />List</li>
                    </ul>
                  </div>
                  <!-- VIEW-SYSTEAM END -->
                </div>
                <!-- PRODUCT-SHOOTING-RESULT START -->
                <div class="product-shooting-result">
                  <form action="#">
                    <button class="btn compare-button">
                      Compare (<span class="compare-value">1</span>)
                      <i class="fa fa-chevron-right"></i>
                    </button>
                  </form>
                  <div class="showing-item">
                    <span>Showing 1 - 12 of 13 items</span>
                  </div>
                  <div class="showing-next-prev">
                    <ul class="pagination-bar">
                      <li class="disabled">
                        <a href="#" ><i class="fa fa-chevron-left"></i>Previous</a>
                      </li>
                      <?php for($i = 1; $i <= $numPage; $i++): ?>
                      <li>
                        <span><a class="pagi-num" href="index.php?controller=products&action=categories&catid=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></span>
                      </li>
                       <?php endfor; ?>
                      
                      <li>
                        <a href="#" >Next<i class="fa fa-chevron-right"></i></a>
                      </li>
                    </ul>
                    <form action="#">
                      <button class="btn showall-button">Show all</button>
                    </form>
                  </div>
                </div>
                <!-- PRODUCT-SHOOTING-RESULT END -->
              </div>
            </div>
            <!-- ALL GATEGORY-PRODUCT START -->
            <div class="all-gategory-product">
              <div class="row">
                <ul class="gategory-product">
                  <!-- SINGLE ITEM START -->
                  <?php foreach($data as $rows): ?>
                  <li class="gategory-product-list col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-product-item">
                      <div class="product-image">
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" /></a>
                        <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" class="new-mark-box"></a>
                        <div class="overlay-content">
                          <ul>
                            <li><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" title="Quick view"><i class="fa fa-search"></i></a></li>
                            <li><a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
                            <li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
                            <li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="product-info">
                                      <div class="customar-comments-box">
                                        <div class="rating-box">
                                            <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><i class="fa fa-star"></i></a>
                                            <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><i class="fa fa-star"></i></a>
                                            <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><i class="fa fa-star"></i></a>
                                            <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><i class="fa fa-star"></i></a>
                                            <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><i class="fa fa-star"></i></a>
                                        </div>
                                        <div class="review-box">
                                          <span>1 Review (s)</span>
                                        </div>
                                      </div>
                                      <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a>
                                      <div class="price-box " style="position: relative;">
                                        <span class="price">$<?php echo ($rows->price - ($rows->price*$rows->discount)/100); ?></span>
                                        <span style="font-size: 9px; position: absolute; color: red;top: 0px; left: 50px;"><?php echo ($rows->discount); ?>%</span>
                                        <span class="old-price" style="margin-left: 30px;">$<?php echo ($rows->price); ?></span>
                                      </div>
                                    </div>
                    </div>                  
                  </li>
                  <!-- SINGLE ITEM END -->
                   <?php endforeach; ?>               
                </ul>
              </div>
            </div>
            <!-- ALL GATEGORY-PRODUCT END -->
            <!-- PRODUCT-SHOOTING-RESULT START -->
            <div class="product-shooting-result product-shooting-result-border">
              <form action="#">
                <button class="btn compare-button">
                  Compare (<strong class="compare-value">1</strong>)
                  <i class="fa fa-chevron-right"></i>
                </button>
              </form>
              <div class="showing-item">
                <span>Showing 1 - 12 of 13 items</span>
              </div>
              <div class="showing-next-prev">
                <ul class="pagination-bar">
                      <li class="disabled">
                        <a href="#" ><i class="fa fa-chevron-left"></i>Previous</a>
                      </li>
                      <?php for($i = 1; $i <= $numPage; $i++): ?>
                      <li>
                        <span><a class="pagi-num" href="index.php?controller=products&action=categories&catid=<?php echo $category_id; ?>&p=<?php echo $i; ?>"><?php echo $i; ?></a></span>
                      </li>
                       <?php endfor; ?>
                      
                      <li>
                        <a href="#" >Next<i class="fa fa-chevron-right"></i></a>
                      </li>
                    </ul>
                <form action="#">
                  <button class="btn showall-button">Show all</button>
                </form>
              </div>
            </div>  
            <!-- PRODUCT-SHOOTING-RESULT END -->
          </div>
        </div>
      </div>
</section>
<!-- MAIN-CONTENT-SECTION END -->