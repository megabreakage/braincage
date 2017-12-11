<?php if (isset($_SESSION['user_logged']) == FAlSE) {
  redirect("auth/login", "refresh");
} else {
 ?>
  <!-- Page Header Start -->
  <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
      <div class="container">
          <div class="title">
              <h2 class="h1 text-white">Products</h2>
          </div>

          <ul class="breadcrumb text-gray ff--primary">
              <li><a href="home-1.html" class="btn-link">Home</a></li>
              <li class="active"><span class="text-primary">Products</span></li>
          </ul>
      </div>
  </div>
  <!-- Page Header End -->

  <!-- Page Wrapper Start -->
  <section class="page--wrapper pt--80 pb--20">
    <div class="container">
      <div class="row">
        <!-- Main Content Start -->
        <div class="main--content col-md-12 pb--30">
          <div class="main--content-inner">
            <div class="row AdjustRow">
              <?php foreach ($products as $product) { ?>
              <div class="col-md-3 col-xs-6 col-xxs-12 pb--30">
                  <!-- Product Item Start -->
                  <div class="product--item" data-scroll-reveal="bottom">
                      <!-- Product Image Start -->
                      <div class="product--img">
                          <img src="<?php echo base_url() ?>img/products-img/img-01-normal.jpg" alt="">
                          <img src="<?php echo base_url() ?>img/products-img/img-01-hover.jpg" alt="">

                          <div class="action">
                              <a href="product_details">
                                  <i class="fa fa-eye"></i>
                                  <span>View Details</span>
                              </a>
                          </div>
                      </div>
                      <!-- Product Image End -->

                      <!-- Product Info Start -->
                      <div class="product--info text-center">
                        <div class="cat">
                          <p>
                            <a href="#" class="btn-link"><?php echo ucfirst($product['category']); ?></a>
                          </p>
                        </div>

                        <div class="title">
                          <h3 class="h6">
                            <a href="product_details" class="btn-link"><?php echo ucfirst($product['product_name']); ?></a>
                          </h3>
                        </div>

                        <div class="rating">
                          <ul class="nav">
                            <?php for ($i=0; $i < $product['rating']; $i++) {?>
                              <li><i class="fa fa-star text-primary"></i></li>
                            <?php } ?>
                          </ul>
                        </div>

                        <div class="price text-darkest">
                            <p>$<?php echo $product['price'] ?></p>
                        </div>

                        <div class="action fs--14">
                            <a href="cart.html">Add To Cart</a>
                        </div>
                      </div>
                      <!-- Product Info End -->
                  </div>
                  <!-- Product Item End -->
              </div>
              <?php } ?>
            </div>
          </div>
        </div>
          <!-- Main Content End -->
      </div>
    </div>
  </section>
  <!-- Page Wrapper End -->
<?php } ?>
