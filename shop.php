<?php include "includes/connect.php"; ?>
<?php include "includes/header.php"; ?>

<?php
// Define product data (category, title, image, link, etc.)
$products = [
    [
        'category' => 'cereal',
        'title' => 'Maize (Corn)',
        'image' => 'crop_images/maize-corn.jpeg',
        'link' => 'shop-single-maize-corn.php',
        'tag' => 'Cereal Crop',
        'available' => 'Available in 1 Kg and 4 Kg',
    ],
    [
        'category' => 'cereal',
        'title' => 'Pearl Millet (Bajra)',
        'image' => 'crop_images/Pearl_Millet-Bajra-1.jpeg',
        'link' => 'shop-single-pearl-millet-bajra.php',
        'tag' => 'Cereal Crop',
        'available' => 'Available in 1.5 Kg',
    ],
    [
        'category' => 'fodder',
        'title' => 'SSG (Sorghum Sudan Grass)',
        'image' => 'crop_images/⁠Fodder-Sorghum_Sudan_Grass.webp',
        'link' => 'shop-single-ssg-sorghum-sudan-grass.php',
        'tag' => 'Fodder Crop',
        'available' => 'Available in 5 Kg',
    ],
    [
        'category' => 'fodder',
        'title' => 'Multicut Fodder Rajka Bajri',
        'image' => 'crop_images/Fodder-Multicut_Fodder_Rajka _Bajri-1.jpeg',
        'link' => 'shop-single-multicut-fodder-rajka-bajri.php',
        'tag' => 'Fodder Crop',
        'available' => 'Available in 1 Kg',
    ],
    [
        'category' => 'fodder',
        'title' => 'Lucerne (Rajka grass)',
        'image' => 'crop_images/Fodder-Lucerne_Rajka_grass.jpeg',
        'link' => 'shop-single-lucerne-rajka-grass.php',
        'tag' => 'Fodder Crop',
        'available' => 'Available in 1 Kg',
    ],
    [
        'category' => 'fodder',
        'title' => 'Chicory (Kasni fodder)',
        'image' => 'crop_images/Fodder-Hybrid_Chicory_hybrid_Kasni-1.jpeg',
        'link' => 'shop-single-chicory-kasni-fodder.php',
        'tag' => 'Fodder Crop',
        'available' => 'Available in 1 Kg',
    ],
    [
        'category' => 'fodder',
        'title' => 'Hybrid Chicory (hybrid Kasni fodder)',
        'image' => 'crop_images/Fodder-Hybrid_Chicory_hybrid_Kasni-2.jpeg',
        'link' => 'shop-single-hybrid-chicory-hybrid-kasni-fodder.php',
        'tag' => 'Fodder Crop',
        'available' => 'Available in 100 Gm',
    ],
    [
        'category' => 'oilseeds',
        'title' => 'Mustard Seeds',
        'image' => 'crop_images/Mustard_seeds-1.jpeg',
        'link' => 'shop-single-mustard-seeds.php',
        'tag' => 'Oilseed Crop',
        'available' => 'Available in 1 Kg',
    ],
    [
        'category' => 'pulses',
        'title' => 'Green gram (Moong)',
        'image' => 'crop_images/Pulses_crop_Green_gram(Moong).jpeg',
        'link' => 'shop-single-green-gram-moong.php',
        'tag' => 'Pulse Crop',
        'available' => 'Available in 1 Kg',
    ],
    [
        'category' => 'pulses',
        'title' => 'Black gram (Urad)',
        'image' => 'crop_images/Pulses_crop_⁠Black_gram_(Urad) .jpeg',
        'link' => 'shop-single-black-gram-urad.php',
        'tag' => 'Pulse Crop',
        'available' => 'Available in 1 Kg',
    ],
    [
        'category' => 'vegetable',
        'title' => 'Spinach (Palak)',
        'image' => 'crop_images/Vegetable_crop_Spinach(Palak).jpeg',
        'link' => 'shop-single-spinach-palak.php',
        'tag' => 'Vegetable Crop',
        'available' => 'Available in 1 Kg',
    ],
    [
        'category' => 'vegetable',
        'title' => 'Coriander (Dhaniya)',
        'image' => 'crop_images/⁠Coriander.jpeg',
        'link' => 'shop-single-coriander-dhaniya.php',
        'tag' => 'Vegetable Crop',
        'available' => 'Available in 500 GM',
    ],
    [
        'category' => 'vegetable',
        'title' => 'Onion (Desi Gavran)',
        'image' => 'crop_images/Onion.jpeg',
        'link' => 'shop-single-onion-desi-gavran.php',
        'tag' => 'Vegetable Crop',
        'available' => 'Available in 500 GM',
    ],
    [
        'category' => 'vegetable',
        'title' => 'Onion (N-53)',
        'image' => 'crop_images/⁠Onion(N-53).jpeg',
        'link' => 'shop-single-onion-n53.php',
        'tag' => 'Vegetable Crop',
        'available' => 'Available in 500 GM',
    ],
    [
        'category' => 'pulses',
        'title' => 'Research guar',
        'image' => 'crop_images/⁠Research_guar_1.jpeg',
        'link' => 'shop-single-research-guar.php',
        'tag' => 'Pulse Crop',
        'available' => 'Available in 5 Kg bag',
    ],
    // Add more products as needed
];

$category = isset($_GET['category']) ? $_GET['category'] : '';

function productMatchesCategory($product, $category) {
    if ($category === '' || $category === null) return true;
    return $product['category'] === $category;
}
?>

<!-- Start Breadcrumb  -->
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

<!-- Start Shop  -->
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
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Start Tab Content -->
                <div class="tab-content tab-content-info text-center" id="shop-tabContent">
                    <!-- Start Product Grid View (Filtered) -->
                    <div class="tab-pane fade show active" id="grid-tab" role="tabpanel" aria-labelledby="grid-tab-control">
                        <ul class="vt-products columns-4">
                            <?php foreach ($products as $product): ?>
                                <?php if (productMatchesCategory($product, $category)): ?>
                                <li class="product">
                                    <div class="product-contents">
                                        <div class="product-image">
                                            <a href="<?php echo $product['link']; ?>"><img src="<?php echo $product['image']; ?>" alt="<?php echo htmlspecialchars($product['title']); ?>" class="product-img-fixed"></a>
                                        </div>
                                        <div class="product-caption">
                                            <div class="product-tags">
                                                <a href="#"><?php echo $product['tag']; ?></a>
                                            </div>
                                            <h4 class="product-title"><a href="<?php echo $product['link']; ?>"><?php echo $product['title']; ?></a></h4>
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
                                                <span><?php echo $product['available']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- End Product Grid View (Filtered) -->
                </div>
                <!-- End Tab Content -->
                <!-- Pgination -->
                <!-- <nav class="woocommerce-pagination">
                    <ul class="page-numbers">
                        <li><a class="previous page-numbers" href="#"><i class="fas fa-angle-left"></i></a></li>
                        <li><span aria-current="page" class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav> -->
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