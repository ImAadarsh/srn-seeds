<?php include "includes/connect.php"; ?>
<?php include "includes/header.php"; ?>
<?php
$pid = $_GET['id'];
$sql = "select * from products where id='$pid'";
$results = $connect->query($sql);
$final=$results->fetch_assoc();
$cat = $final['category_id'];
$scat = $final['subcategory_id'];
$sql1 = "select * from categories where id=$cat";
$sql2 = "select * from subcategories where id=$scat";
$results1 = $connect->query($sql1);
$final1=$results1->fetch_assoc();
$results2 = $connect->query($sql2);
$final2=$results2->fetch_assoc();
      ?>
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area shadow dark bg-cover text-center text-light"
    style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1><?php echo $final['name']?></h1>
                <ul class="breadcrumb">
                    <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                    <li>SRN Seeds</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start Shop 
    ============================================= -->
<div class="validtheme-shop-single-area default-padding">
    <div class="container">
        <div class="product-details">
            <div class="row">

                <div class="col-lg-6">
                    <div class="product-thumb">
                        <div id="timeline-carousel" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner item-box">
                                <div class="carousel-item active product-item">
                                    <a href="<?php echo $uri.$final['image']?>" class="item popup-gallery">
                                        <img src="<?php echo $uri.$final['image']?>" alt="Thumb">
                                    </a>
                                    <span class="onsale theme">SRN</span>
                                </div>

                            </div>

                            <!-- Carousel Indicators -->
                            <div class="carousel-indicators">
                                <div class="product-gallery-carousel swiper">
                                    <!-- Additional required wrapper -->

                                </div>
                            </div>


                            <!-- End Carousel Content -->

                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="single-product-contents">
                        <div class="summary-top-box">
                            <div class="product-tags">
                                <a href="#">SRN Seeds</a>
                                <a href="#"><?php echo $final1['name']?></a>
                            </div>
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
                        </div>
                        <h2 class="product-title">
                            <?php echo $final['name']?>
                        </h2>

                        <div class="product-stock validthemes-in-stock">
                            <span>In Stock</span>
                        </div>
                        <p>
                            <?php echo $final['description']?>
                        </p>


                        <div class="product-meta">
                            <span class="sku">
                                <strong>Category :</strong> <?php echo $final1['name']?>
                            </span>
                            <span class="sku">
                                <strong>Sub-Category :</strong> <?php echo $final2['name']?>
                            </span>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Bottom Info  -->
        <div class="single-product-bottom-info">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Tab Nav -->
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="description-tab-control" data-bs-toggle="tab"
                            data-bs-target="#description-tab" type="button" role="tab" aria-controls="description-tab"
                            aria-selected="true">
                            Description
                        </button>

                        <button class="nav-link" id="information-tab-control" data-bs-toggle="tab"
                            data-bs-target="#information-tab" type="button" role="tab" aria-controls="information-tab"
                            aria-selected="false">
                            Additional Information
                        </button>

                    </div>
                    <!-- End Tab Nav -->
                    <!-- Start Tab Content -->
                    <div class="tab-content tab-content-info" id="myTabContent">

                        <!-- Tab Single -->
                        <div class="tab-pane fade show active" id="description-tab" role="tabpanel"
                            aria-labelledby="description-tab-control">
                            <p>
                                <?php echo $final['description']?>
                            </p>

                        </div>
                        <!-- End Single -->

                        <!-- Tab Single -->
                        <div class="tab-pane fade" id="information-tab" role="tabpanel"
                            aria-labelledby="information-tab-control">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>Sowing Time</td>
                                            <td> <?php echo $final['sowing']?></td>
                                        </tr>
                                        <tr>
                                            <td>Seed Per Acre</td>
                                            <td><?php echo $final['spa']?> </td>
                                        </tr>
                                        <tr>
                                            <td> Packing Size</td>
                                            <td><?php echo $final['packing']?> </td>
                                        </tr>
                                        <tr>
                                            <td> Plant Height</td>
                                            <td> <?php echo $final['height']?></td>
                                        </tr>
                                        <tr>
                                            <td> Grain Colour</td>
                                            <td> <?php echo $final['colour']?></td>
                                        </tr>
                                        <tr>
                                            <td> Maturity Time</td>
                                            <td> <?php echo $final['time']?></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- End Tab Single -->

                        <!-- Tab Single -->

                        <!-- End Tab Single -->

                    </div>
                    <!-- End Tab Content -->
                </div>
            </div>
        </div>
        <!-- End Product Bottom Info  -->

        <!-- Related Product  -->

    </div>
</div>
<!-- End Shop -->
<?php include "includes/footer.php"; ?>