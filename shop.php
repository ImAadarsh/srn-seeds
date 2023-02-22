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

                    <!-- Strt Product Grid Vies -->
                    <div class="tab-pane fade show active" id="grid-tab" role="tabpanel"
                        aria-labelledby="grid-tab-control">
                        <ul class="vt-products columns-4">
                            <?php
         
         if(isset($_GET['id'])){
            $cat = $_GET['id'];
            $sql = "select * from products where category_id=$cat";
         }else{
            $sql = "select * from products";
         }
      $results = $connect->query($sql);
      while($final=$results->fetch_assoc()){?>
                            <?php 
$scat = $final['subcategory_id'];
$sql2 = "select * from subcategories where id=$scat";
$results2 = $connect->query($sql2);
$final2=$results2->fetch_assoc();
?>
                            <!-- Single product -->
                            <li class="product">
                                <div class="product-contents">
                                    <div class="product-image">
                                        <a href="shop-single.php?id=<?php echo $final['id']?>">
                                            <img src="<?php echo $uri.$final['image']?>" alt="Product">
                                        </a>
                                        <div class="shop-action">
                                            <ul>
                                                <li class="quick-view">
                                                    <a href="shop-single.php?id=<?php echo $final['id']?>"><span>Quick
                                                            view</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-caption">
                                        <div class="product-tags">
                                            <a href="#"></a>
                                            <a
                                                href="shop-single.php?id=<?php echo $final['id']?>"><?php echo $final2['name']?></a>
                                        </div>
                                        <h4 class="product-title">
                                            <a
                                                href="shop-single.php?id=<?php echo $final['id']?>"><?php echo $final['name']?></a>
                                        </h4>
                                        <div class="review-count">
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </div>
                                            <span></span>
                                        </div>
                                        <div class="price">
                                            <span></span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Single product -->
                            <?php } ?>

                        </ul>
                    </div>
                    <!-- End Product Grid Vies -->




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