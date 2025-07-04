<?php include "includes/connect.php"; ?>
<?php include "includes/header.php"; ?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-cover text-center text-light"
    style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Products</h1>
                <ul class="breadcrumb">
                    <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Shop 
    ============================================= -->
<div class="validtheme-shop-area default-padding">
    <div class="container">
        <div class="shop-listing-contentes">

            <div class="row item-flex center">

                <div class="col-lg-7">
                    <div class="content">
                        <!-- Tab Nav -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="grid-tab-control" data-bs-toggle="tab"
                                    data-bs-target="#grid-tab" type="button" role="tab" aria-controls="grid-tab"
                                    aria-selected="true">
                                    <i class="fas fa-th-large"></i>
                                </button>

                                <button class="nav-link" id="list-tab-control" data-bs-toggle="tab"
                                    data-bs-target="#list-tab" type="button" role="tab" aria-controls="list-tab"
                                    aria-selected="false">
                                    <i class="fas fa-th-list"></i>
                                </button>
                            </div>
                        </nav>
                        <!-- End Tab Nav -->
                    </div>
                </div>

                <div class="col-lg-5 text-right">
                    <!-- <p>
                        Showing 1–10 of 47 results
                    </p> -->
                    <!-- <select name="cars" id="cars">
                        <option value="volvo">Short by latest</option>
                        <option value="saab">Short by Recent</option>
                        <option value="mercedes">Short by Popular</option>
                        <option value="audi">Short by Relevant</option>
                    </select> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Tab Content -->
                <div class="tab-content tab-content-info text-center" id="shop-tabContent">

                    <!-- Start Product Grid View (Hardcoded) -->
                    <div class="tab-pane fade show active" id="grid-tab" role="tabpanel" aria-labelledby="grid-tab-control">
                        <ul class="vt-products columns-4">
                            <!-- Maize (Corn) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-maize-corn.php"><img src="crop_images/maize-corn.jpeg" alt="Maize (Corn)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Cereal Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-maize-corn.php">Maize (Corn)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg and 4 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Pearl Millet (Bajra) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-pearl-millet-bajra.php"><img src="crop_images/Pearl_Millet-Bajra-1.jpeg" alt="Pearl Millet (Bajra)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Cereal Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-pearl-millet-bajra.php">Pearl Millet (Bajra)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1.5 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- SSG (Sorghum Sudan Grass) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-ssg-sorghum-sudan-grass.php"><img src="crop_images/⁠Fodder-Sorghum_Sudan_Grass.webp" alt="SSG (Sorghum Sudan Grass)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Fodder Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-ssg-sorghum-sudan-grass.php">SSG (Sorghum Sudan Grass)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 5 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Multicut Fodder Rajka Bajri -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-multicut-fodder-rajka-bajri.php"><img src="crop_images/Fodder-Multicut_Fodder_Rajka _Bajri-1.jpeg" alt="Multicut Fodder Rajka Bajri" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Fodder Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-multicut-fodder-rajka-bajri.php">Multicut Fodder Rajka Bajri</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Lucerne (Rajka grass) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-lucerne-rajka-grass.php"><img src="crop_images/Fodder-Lucerne_Rajka_grass.jpeg" alt="Lucerne (Rajka grass)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Fodder Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-lucerne-rajka-grass.php">Lucerne (Rajka grass)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Chicory (Kasni fodder) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-chicory-kasni-fodder.php"><img src="crop_images/Fodder-Hybrid_Chicory_hybrid_Kasni-1.jpeg" alt="Chicory (Kasni fodder)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Fodder Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-chicory-kasni-fodder.php">Chicory (Kasni fodder)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Hybrid Chicory (hybrid Kasni fodder) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-hybrid-chicory-hybrid-kasni-fodder.php"><img src="crop_images/Fodder-Hybrid_Chicory_hybrid_Kasni-2.jpeg" alt="Hybrid Chicory (hybrid Kasni fodder)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Fodder Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-hybrid-chicory-hybrid-kasni-fodder.php">Hybrid Chicory (hybrid Kasni fodder)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 100 Gm</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Mustard Seeds -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-mustard-seeds.php"><img src="crop_images/Mustard_seeds-1.jpeg" alt="Mustard Seeds" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Oilseed Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-mustard-seeds.php">Mustard Seeds</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Green gram (Moong) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-green-gram-moong.php"><img src="crop_images/Pulses_crop_Green_gram(Moong).jpeg" alt="Green gram (Moong)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Pulse Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-green-gram-moong.php">Green gram (Moong)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Black gram (Urad) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-black-gram-urad.php"><img src="crop_images/Pulses_crop_⁠Black_gram_(Urad) .jpeg" alt="Black gram (Urad)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Pulse Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-black-gram-urad.php">Black gram (Urad)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Spinach (Palak) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-spinach-palak.php"><img src="crop_images/Vegetable_crop_Spinach(Palak).jpeg" alt="Spinach (Palak)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Vegetable Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-spinach-palak.php">Spinach (Palak)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 1 Kg</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Coriander (Dhaniya) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-coriander-dhaniya.php"><img src="crop_images/⁠Coriander.jpeg" alt="Coriander (Dhaniya)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Vegetable Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-coriander-dhaniya.php">Coriander (Dhaniya)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 500 GM</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Onion (Desi Gavran) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-onion-desi-gavran.php"><img src="crop_images/Onion.jpeg" alt="Onion (Desi Gavran)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Vegetable Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-onion-desi-gavran.php">Onion (Desi Gavran)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 500 GM</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Onion (N-53) -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-onion-n53.php"><img src="crop_images/⁠Onion(N-53).jpeg" alt="Onion (N-53)" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Vegetable Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-onion-n53.php">Onion (N-53)</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 500 GM</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- Research guar -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single-research-guar.php"><img src="crop_images/⁠Research_guar_1.jpeg" alt="Research guar" class="product-img-fixed"></a>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#">Pulse Crop</a>
                                        </div>
                                        <h4 class="product-title"><a href="shop-single-research-guar.php">Research guar</a></h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="price">
                                            <span>Available in 5 Kg bag</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Product Grid View (Hardcoded) -->




                </div>
                <!-- End Tab Content -->



                <!-- Pgination -->
                <nav class="woocommerce-pagination">
                    <ul class="page-numbers">
                        <li><a class="previous page-numbers" href="#"><i class="fas fa-angle-left"></i></a></li>

                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Shop -->

<?php include "includes/footer.php"; ?>

<style>
.product-img-fixed {
    width: 250px;
    height: 250px;
    object-fit: cover;
    display: block;
    margin: 0 auto;
}
</style>