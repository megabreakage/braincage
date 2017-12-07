
        <!-- Page Header Start -->
        <div class="page--header pt--60 pb--60 text-center" data-bg-img="img/page-header-img/bg.jpg" data-overlay="0.85">
            <div class="container">
                <div class="title">
                    <h2 class="h1 text-white">Product Details</h2>
                </div>

                <ul class="breadcrumb text-gray ff--primary">
                    <li><a href="home-1.html" class="btn-link">Home</a></li>
                    <li><a href="products.html" class="btn-link">Products</a></li>
                    <li class="active"><span class="text-primary">Product Details</span></li>
                </ul>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Page Wrapper Start -->
        <section class="page--wrapper pt--80 pb--20">
            <div class="container">
                <div class="row">
                    <!-- Main Content Start -->
                    <div class="main--content col-md-8" data-trigger="stickyScroll">
                        <div class="main--content-inner">
                            <div class="row">
                                <div class="col-md-5 col-sm-6 pb--60">
                                    <!-- Product Gallery Start -->
                                    <div class="product--gallery">
                                        <!-- Tab Content Start -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="productImg01">
                                                <div data-trigger="zoom">
                                                    <img src="<?php echo base_url() ?>img/products-img/full-01.jpg" alt="">
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="productImg02">
                                                <div data-trigger="zoom">
                                                    <img src="<?php echo base_url() ?>img/products-img/full-02.jpg" alt="">
                                                </div>
                                            </div>

                                            <div class="tab-pane fade" id="productImg03">
                                                <div data-trigger="zoom">
                                                    <img src="<?php echo base_url() ?>img/products-img/full-03.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tab Content End -->

                                        <!-- Owl Carousel Start -->
                                        <div class="owl-carousel" data-owl-items="3" data-owl-loop="false" data-owl-margin="10" data-owl-nav="true">
                                            <a href="#productImg01" data-toggle="tab">
                                                <img src="<?php echo base_url() ?>img/products-img/thumb-01.jpg" alt="">
                                            </a>

                                            <a href="#productImg02" data-toggle="tab">
                                                <img src="<?php echo base_url() ?>img/products-img/thumb-02.jpg" alt="">
                                            </a>

                                            <a href="#productImg03" data-toggle="tab">
                                                <img src="<?php echo base_url() ?>img/products-img/thumb-03.jpg" alt="">
                                            </a>

                                            <a href="#productImg02" data-toggle="tab">
                                                <img src="<?php echo base_url() ?>img/products-img/thumb-02.jpg" alt="">
                                            </a>
                                        </div>
                                        <!-- Owl Carousel End -->
                                    </div>
                                    <!-- Product Gallery End -->
                                </div>

                                <div class="col-md-7 col-sm-6 pb--60">
                                    <!-- Product Summery Start -->
                                    <div class="product--summery fs--14">
                                        <div class="title">
                                            <h3 class="h4">Emo T-Shirt</h3>
                                        </div>

                                        <div class="review--count text-darkest">
                                            <p>
                                                <a href="#" class="btn-link">
                                                    <i class="mr--8 text-default fa fa-comment-o"></i>
                                                    <span>03 Reviews</span>
                                                </a>
                                            </p>
                                        </div>

                                        <div class="price text-darkest">
                                            <p><span class="del text-default mr--10">$ 11.00</span>$09.00</p>
                                        </div>

                                        <div class="stock text-darkest">
                                            <ul class="nav">
                                                <li>JKU: <span>S-6597544</span></li>
                                                <li><span>25 In Stock</span></li>
                                            </ul>
                                        </div>

                                        <div class="desc">
                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal.</p>
                                        </div>

                                        <form action="#" class="cart">
                                            <!-- Product Quantity Start -->
                                            <div class="product--quantity" data-trigger="spinner">
                                                <div class="input-group">
                                                    <div class="input-group-addon text-default">
                                                        <i class="fa fa-minus-circle" data-spin="down"></i>
                                                    </div>

                                                    <input type="text" name="quantity" value="1" data-min="1" data-max="10" data-step="1" class="form-control" data-rule="quantity">

                                                    <div class="input-group-addon text-default">
                                                        <i class="fa fa-plus-circle" data-spin="up"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Product Quantity End -->

                                            <button type="submit" class="btn btn-default">Add To Cart</button>

                                            <ul class="nav text-darkest">
                                                <li><a href="#">Wishlist</a></li>
                                                <li><a href="#">Compare</a></li>
                                            </ul>
                                        </form>

                                        <ul class="meta nav">
                                            <li><span><i class="fa fa-tags"></i></span></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Shop</a></li>
                                            <li><a href="#">Branding</a></li>
                                            <li><a href="#">T-Shirt</a></li>
                                        </ul>

                                        <ul class="meta nav">
                                            <li><span><i class="fa fa-folder-open-o"></i></span></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Kids</a></li>
                                            <li><a href="#">Garments</a></li>
                                            <li><a href="#">Shopping</a></li>
                                        </ul>

                                        <ul class="social nav text-gray mt--10">
                                            <li>
                                                <i class="fa fa-share-alt mr--10"></i>
                                                <span class="text-darkest mr--10">Share With</span>
                                            </li>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- Product Summery End -->
                                </div>
                            </div>

                            <!-- Product Details Nav Start -->
                            <div class="product--details-nav">
                                <ul class="nav ff--primary fs--18 fw--600 text-black bg-lighter">
                                    <li class="active">
                                        <a href="#produtDetailsTab01" data-toggle="tab">Description</a>
                                    </li>
                                    <li>
                                        <a href="#produtDetailsTab02" data-toggle="tab">Additional Information</a>
                                    </li>
                                    <li>
                                        <a href="#produtDetailsTab03" data-toggle="tab">Reviews</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Details Nav End -->

                            <!-- Product Details Start -->
                            <div class="product--details tab-content pb--60">
                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade in active" id="produtDetailsTab01">
                                    <div class="content--inner fs--14">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                                    </div>
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade" id="produtDetailsTab02">
                                    <div class="content--inner fs--14">
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>

                                        <table>
                                            <tr>
                                                <th>Brand Name</th>
                                                <td>The Unknown Company</td>
                                            </tr>
                                            <tr>
                                                <th>Made In</th>
                                                <td>Bangladesh</td>
                                            </tr>
                                            <tr>
                                                <th>Manufacture</th>
                                                <td>Manufacture</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <!-- Tab Pane End -->

                                <!-- Tab Pane Start -->
                                <div class="tab-pane fade" id="produtDetailsTab03">
                                    <h4 class="h4 pt--20 pb--20">03 Reviews</h4>

                                    <!-- Review Items Start -->
                                    <ul class="review--items nav">
                                        <li>
                                            <!-- Review Item Start -->
                                            <div class="review--item clearfix">
                                                <div class="img mr--15 float--left" data-overlay="0.3" data-overlay-color="primary">
                                                    <img src="<?php echo base_url() ?>img/products-img/avatar-01.jpg" alt="">
                                                </div>

                                                <div class="info ov--h">
                                                    <div class="header clearfix">
                                                        <div class="meta float--left">
                                                            <p class="fs--14 fw--700 text-darkest mb--0">Denise R. Sherman</p>

                                                            <p><i class="fa fa-clock-o mr--10"></i>Yeasterday at 08:20 am</p>
                                                        </div>

                                                        <div class="rating float--right text-lightgray">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="content--inner fs--14 mt--8">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review Item End -->
                                        </li>
                                        <li>
                                            <!-- Review Item Start -->
                                            <div class="review--item clearfix">
                                                <div class="img mr--15 float--left" data-overlay="0.3" data-overlay-color="primary">
                                                    <img src="<?php echo base_url() ?>img/products-img/avatar-02.jpg" alt="">
                                                </div>

                                                <div class="info ov--h">
                                                    <div class="header clearfix">
                                                        <div class="meta float--left">
                                                            <p class="fs--14 fw--700 text-darkest mb--0">Eugene E. Thompson</p>

                                                            <p><i class="fa fa-clock-o mr--10"></i>1 Month ago</p>
                                                        </div>

                                                        <div class="rating float--right text-lightgray">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="content--inner fs--14 mt--8">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review Item End -->
                                        </li>
                                        <li>
                                            <!-- Review Item Start -->
                                            <div class="review--item clearfix">
                                                <div class="img mr--15 float--left" data-overlay="0.3" data-overlay-color="primary">
                                                    <img src="<?php echo base_url() ?>img/products-img/avatar-03.jpg" alt="">
                                                </div>

                                                <div class="info ov--h">
                                                    <div class="header clearfix">
                                                        <div class="meta float--left">
                                                            <p class="fs--14 fw--700 text-darkest mb--0">Carol M. Rodriguez</p>

                                                            <p><i class="fa fa-clock-o mr--10"></i>2 Month and 4 days ago</p>
                                                        </div>

                                                        <div class="rating float--right text-lightgray">
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star text-primary"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>

                                                    <div class="content--inner fs--14 mt--8">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Review Item End -->
                                        </li>
                                    </ul>
                                    <!-- Review Items End -->

                                    <h4 class="h4 pt--40">Add Review</h4>

                                    <!-- Review Form Start -->
                                    <div class="review--form pt--20" data-form="validate">
                                        <form action="#">
                                            <p class="pb--10">Don’t worry ! your e-mail address will not published.</p>

                                            <p class="review--rating fs--14 text-lightgray">
                                                <span class="text-darkest mr--10">Drop Rating :</span>

                                                <span class="stars fs--12">
                                                    <label>
                                                        <i class="fa fa-star mr--2"></i>
                                                        <input type="radio" name="rating" value="1">
                                                    </label>

                                                    <label>
                                                        <i class="fa fa-star mr--2"></i>
                                                        <input type="radio" name="rating" value="2">
                                                    </label>

                                                    <label>
                                                        <i class="fa fa-star mr--2"></i>
                                                        <input type="radio" name="rating" value="3">
                                                    </label>

                                                    <label>
                                                        <i class="fa fa-star mr--2"></i>
                                                        <input type="radio" name="rating" value="4">
                                                    </label>

                                                    <label>
                                                        <i class="fa fa-star mr--2"></i>
                                                        <input type="radio" name="rating" value="5">
                                                    </label>
                                                </span>
                                            </p>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <textarea name="review" placeholder="Write Your Review" class="form-control" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" name="name" placeholder="Name *" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="email" name="email" placeholder="E-mail *" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" name="website" placeholder="Website" class="form-control">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-primary">Submit Review</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- Review Form End -->
                                </div>
                                <!-- Tab Pane End -->
                            </div>
                            <!-- Product Details End -->
                        </div>
                    </div>
                    <!-- Main Content End -->

                    <!-- Main Sidebar Start -->
                    <div class="main--sidebar col-md-4 pb--60" data-trigger="stickyScroll">
                        <!-- Widget Start -->
                        <div class="widget">
                            <!-- Search Widget Start -->
                            <div class="search--widget" data-form="validate">
                                <form action="#">
                                    <input type="text" name="search" placeholder="Search" class="form-control" required>

                                    <button type="submit" class="btn-link"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Search Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Catagories</h2>

                            <!-- Links Widget Start -->
                            <div class="links--widget">
                                <ul class="nav">
                                    <li><a href="#">Leather</a></li>
                                    <li>
                                        <a href="#">Accessories</a>

                                        <ul class="nav">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Women</a></li>
                                            <li><a href="#">Kids</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Up Comming Features</a></li>
                                    <li><a href="#">Miscelleneous</a></li>
                                    <li><a href="#">Miscelleneous</a></li>
                                </ul>
                            </div>
                            <!-- Links Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">My Cart</h2>

                            <!-- Cart Widget Start -->
                            <div class="cart--widget">
                                <ul class="nav">
                                    <li class="clearfix">
                                        <div class="img mr--10 float--left">
                                            <a href="#"><img src="img/widgets-img/cart-widget/01.jpg" alt=""></a>
                                        </div>

                                        <div class="info fs--12 ov--h">
                                            <h4 class="h4 fs--14 fw--500 text-darkest">
                                                <a href="#">Wireless Gaming Controller</a>
                                            </h4>

                                            <p class="mt--4">$ 12.00  x  3</p>
                                        </div>

                                        <a href="#" class="remove"></a>
                                    </li>
                                    <li class="clearfix">
                                        <div class="img mr--10 float--left">
                                            <a href="#"><img src="img/widgets-img/cart-widget/02.jpg" alt=""></a>
                                        </div>

                                        <div class="info fs--12 ov--h">
                                            <h4 class="h4 fs--14 fw--500 text-darkest">
                                                <a href="#">WiFi Action Camera</a>
                                            </h4>

                                            <p class="mt--4">$ 17.00  x  1</p>
                                        </div>

                                        <a href="#" class="remove"></a>
                                    </li>
                                    <li class="clearfix">
                                        <div class="img mr--10 float--left">
                                            <a href="#"><img src="img/widgets-img/cart-widget/03.jpg" alt=""></a>
                                        </div>

                                        <div class="info fs--12 ov--h">
                                            <h4 class="h4 fs--14 fw--500 text-darkest">
                                                <a href="#">Portable Bluetooth Speaker</a>
                                            </h4>

                                            <p class="mt--4">$ 30.00  x  3</p>
                                        </div>

                                        <a href="#" class="remove"></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Cart Widget End -->
                        </div>
                        <!-- Widget End -->

                        <!-- Widget Start -->
                        <div class="widget">
                            <h2 class="h4 fw--700 widget--title">Review</h2>

                            <!-- Review Widget Start -->
                            <div class="review--widget">
                                <div class="owl-carousel">
                                    <div class="item">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have  believable.</p>
                                        </blockquote>

                                        <p>
                                            <img src="img/widgets-img/review-widget/01.jpg" alt="">
                                            <span>Sarah Perez,</span>
                                            <span>San Fransisco</span>
                                        </p>
                                    </div>

                                    <div class="item">
                                        <blockquote>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have  believable.</p>
                                        </blockquote>

                                        <p>
                                            <img src="img/widgets-img/review-widget/02.jpg" alt="">
                                            <span>Lori Meyer,</span>
                                            <span>United States</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review Widget End -->
                        </div>
                        <!-- Widget End -->
                    </div>
                    <!-- Main Sidebar End -->
                </div>

                <!-- Related Products Start -->
                <div class="related--products">
                    <h3 class="h4 pb--20">Related Products</h3>

                    <div class="row AdjustRow">
                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--30">
                            <!-- Product Item Start -->
                            <div class="product--item">
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
                                            <a href="#" class="btn-link">Uncatagory</a>
                                        </p>
                                    </div>

                                    <div class="title">
                                        <h3 class="h6">
                                            <a href="product_details" class="btn-link">Wireless Gaming Controller</a>
                                        </h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="price text-darkest">
                                        <p><span class="del text-default mr--15">$ 15.00</span>$ 12.00</p>
                                    </div>

                                    <div class="action fs--14">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- Product Info End -->
                            </div>
                            <!-- Product Item End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--30">
                            <!-- Product Item Start -->
                            <div class="product--item">
                                <!-- Product Image Start -->
                                <div class="product--img">
                                    <img src="<?php echo base_url() ?>img/products-img/img-02-normal.jpg" alt="">
                                    <img src="<?php echo base_url() ?>img/products-img/img-02-hover.jpg" alt="">

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
                                            <a href="#" class="btn-link">Uncatagory</a>
                                        </p>
                                    </div>

                                    <div class="title">
                                        <h3 class="h6">
                                            <a href="product_details" class="btn-link">WiFi Action Camera</a>
                                        </h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="price text-darkest">
                                        <p><span class="del text-default mr--15">$ 20.00</span>$ 17.00</p>
                                    </div>

                                    <div class="action fs--14">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- Product Info End -->
                            </div>
                            <!-- Product Item End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--30">
                            <!-- Product Item Start -->
                            <div class="product--item">
                                <!-- Product Offer Start -->
                                <div class="product--offer text-white bg-primary">
                                    <p>Flat 25% Off</p>
                                </div>
                                <!-- Product Offer End -->

                                <!-- Product Image Start -->
                                <div class="product--img">
                                    <img src="<?php echo base_url() ?>img/products-img/img-03-normal.jpg" alt="">
                                    <img src="<?php echo base_url() ?>img/products-img/img-03-hover.jpg" alt="">

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
                                            <a href="#" class="btn-link">Uncatagory</a>
                                        </p>
                                    </div>

                                    <div class="title">
                                        <h3 class="h6">
                                            <a href="product_details" class="btn-link">Portable Bluetooth Speaker</a>
                                        </h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="price text-darkest">
                                        <p><span class="del text-default mr--15">$ 40.00</span>$ 30.00</p>
                                    </div>

                                    <div class="action fs--14">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- Product Info End -->
                            </div>
                            <!-- Product Item End -->
                        </div>

                        <div class="col-md-3 col-xs-6 col-xxs-12 pb--30">
                            <!-- Product Item Start -->
                            <div class="product--item">
                                <!-- Product Image Start -->
                                <div class="product--img">
                                    <img src="<?php echo base_url() ?>img/products-img/img-04-normal.jpg" alt="">
                                    <img src="<?php echo base_url() ?>img/products-img/img-04-hover.jpg" alt="">

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
                                            <a href="#" class="btn-link">Uncatagory</a>
                                        </p>
                                    </div>

                                    <div class="title">
                                        <h3 class="h6">
                                            <a href="product_details" class="btn-link">Indoor Security Camera</a>
                                        </h3>
                                    </div>

                                    <div class="rating">
                                        <ul class="nav">
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star text-primary"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>

                                    <div class="price text-darkest">
                                        <p><span class="del text-default mr--15">$ 35.00</span>$ 25.00</p>
                                    </div>

                                    <div class="action fs--14">
                                        <a href="#">Add To Cart</a>
                                    </div>
                                </div>
                                <!-- Product Info End -->
                            </div>
                            <!-- Product Item End -->
                        </div>
                    </div>
                </div>
                <!-- Related Products End -->
            </div>
        </section>
        <!-- Page Wrapper End -->
