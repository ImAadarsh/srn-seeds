<?php include 'includes/header.php'; ?>

<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area text-center shadow dark bg-fixed text-light"
    style="background-image: url(assets/img/2440x1578.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1>About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li class="active">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Start About SRN Seeds LLP Section (Refined Layout) -->
<style>
    .about-highlight-section {
        background: linear-gradient(135deg, #f7fafc 60%, #e6f4ea 100%);
        padding: 70px 0 50px 0;
        position: relative;
        z-index: 1;
    }
    .about-card-full {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 6px 32px 0 rgba(34, 139, 34, 0.08);
        padding: 38px 32px 32px 32px;
        max-width: 900px;
        margin: 0 auto 40px auto;
        text-align: center;
        transition: box-shadow 0.2s;
        position: relative;
    }
    .about-card-full:hover {
        box-shadow: 0 12px 40px 0 rgba(34, 139, 34, 0.16);
    }
    .about-card-full .about-icon {
        font-size: 2.8rem;
        color: #49a760;
        margin-bottom: 18px;
        display: inline-block;
    }
    .about-card-full .card-title {
        font-size: 1.5rem;
        font-weight: 800;
        margin-bottom: 14px;
        color: #1f4e3d;
        letter-spacing: 0.5px;
    }
    .about-card-full .card-text {
        font-size: 1.08rem;
        color: #444;
        margin-bottom: 0;
        line-height: 1.7;
    }
    .about-cards-row-2 {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
    }
    .about-card-half {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 6px 32px 0 rgba(34, 139, 34, 0.08);
        padding: 38px 32px 32px 32px;
        flex: 1 1 320px;
        min-width: 280px;
        max-width: 420px;
        text-align: center;
        transition: box-shadow 0.2s;
        position: relative;
    }
    .about-card-half:hover {
        box-shadow: 0 12px 40px 0 rgba(34, 139, 34, 0.16);
    }
    .about-card-half .about-icon {
        font-size: 2.4rem;
        color: #49a760;
        margin-bottom: 14px;
        display: inline-block;
    }
    .about-card-half .card-title {
        font-size: 1.25rem;
        font-weight: 800;
        margin-bottom: 12px;
        color: #1f4e3d;
        letter-spacing: 0.5px;
    }
    .about-card-half .card-text {
        font-size: 1.05rem;
        color: #444;
        margin-bottom: 0;
        line-height: 1.7;
    }
    .about-card-half ul {
        text-align: left;
        margin: 0 auto;
        display: inline-block;
        padding-left: 0;
        list-style: none;
    }
    .about-card-half ul li {
        position: relative;
        padding-left: 28px;
        margin-bottom: 12px;
        font-size: 1.05rem;
        color: #444;
    }
    .about-card-half ul li:before {
        content: '\f058';
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        color: #49a760;
        position: absolute;
        left: 0;
        top: 2px;
        font-size: 1.1rem;
    }
    @media (max-width: 991px) {
        .about-cards-row-2 {
            flex-direction: column;
            align-items: center;
        }
        .about-card-half {
            max-width: 100%;
        }
    }
</style>
<div class="about-highlight-section">
    <div class="container">
        <div class="site-heading text-center" style="margin-bottom: 30px;">
            <h5 class="sub-title">About SRN Seeds LLP</h5>
            <h2 class="title">Empowering Indian Farmers for a Sustainable Future</h2>
            <div class="devider"></div>
        </div>
        <!-- Who We Are Full Card -->
        <div class="about-card-full">
            <span class="about-icon"><i class="fas fa-seedling"></i></span>
            <div class="card-title">Who We Are</div>
            <div class="card-text">
                SRN Seeds LLP is committed to empowering Indian farmers by providing high-quality, climate-resilient seeds. We specialize in seeds for cereals, fodder, vegetables, and kitchen gardens—offering solutions suited to diverse agro-climatic zones across India.<br><br>
                By combining modern agricultural science with traditional wisdom, we help farmers achieve higher yields, improved crop resistance, and long-term sustainability. Our seeds support better income generation and promote resilient farming practices.<br><br>
                Working closely with distributors and farming communities, we aim to enhance food security and drive rural development.
            </div>
        </div>
        <!-- Mission & Vision Two Cards Row -->
        <div class="about-cards-row-2">
            <!-- Mission Card -->
            <div class="about-card-half">
                <span class="about-icon"><i class="fas fa-bullseye"></i></span>
                <div class="card-title">Our Mission</div>
                <ul>
                    <li>Deliver high-yield, reliable seed varieties that boost farmer incomes.</li>
                    <li>Promote sustainable, eco-friendly agricultural practices that protect soil and biodiversity.</li>
                    <li>Build lasting relationships with farmers and partners through quality, transparency, and collaboration.</li>
                    <li>Invest in ongoing research and innovation to address evolving agricultural needs.</li>
                    <li>Empower farming communities through knowledge sharing and skill development.</li>
                </ul>
            </div>
            <!-- Vision Card -->
            <div class="about-card-half">
                <span class="about-icon"><i class="fas fa-eye"></i></span>
                <div class="card-title">Our Vision</div>
                <div class="card-text">
                    To become India's most trusted and innovative seed company, delivering high-quality, climate-adaptive seeds to every farmer—fostering sustainable agriculture, increasing farmer prosperity, and ensuring a secure and thriving rural future.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About SRN Seeds LLP Section (Refined Layout) -->


<!-- Start Farmer 
    ============================================= -->
<div class="farmer-area default-padding bottom-less bg-gray" style="background-image: url(assets/img/shape/36.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5 class="sub-title">Our Team Members</h5>
                    <h2 class="title">Meet Our Farm Experts</h2>
                    <div class="devider"></div>
                    <p>
                        Everything melancholy uncommonly but solicitude inhabiting <br> projection off. Connection
                        stimulated estimating.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="row">
                    <center>
                        <!-- Single Item -->
                        <div class="col-lg-4 farmer-stye-one">
                            <div class="farmer-style-one-item">
                                <div class="thumb">
                                    <img src="https://media.licdn.com/dms/image/v2/C5603AQEGsf0H9jEJJg/profile-displayphoto-shrink_100_100/profile-displayphoto-shrink_100_100/0/1642773204914?e=1755734400&v=beta&t=WghBpakpA8li44XjfHsKwh3uCuwLxgffmlZtcaiaBzA"
                                        alt="Image Not Found">
                                    <div class="social">
                                        <i class="fas fa-share-alt"></i>
                                        <ul>
                                            <li class="facebook">
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li class="linkedin">
                                                <a href="https://www.linkedin.com/in/anshul-sharma-4468b0155/">
                                                    <i class="fab fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info">
                                    <span>Founder</span>
                                    <h4><a href="#">Anshul Sharma</a></h4>
                                </div>
                            </div>
                        </div>
                    </center>
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <!-- <div class="col-lg-4 farmer-stye-one">
                        <div class="farmer-style-one-item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Image Not Found">
                                <div class="social">
                                    <i class="fas fa-share-alt"></i>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <span>Farmer of cherry</span>
                                <h4><a href="#">Kevin Martin</a></h4>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    <!-- <div class="col-lg-4 farmer-stye-one">
                        <div class="farmer-style-one-item">
                            <div class="thumb">
                                <img src="assets/img/800x800.png" alt="Image Not Found">
                                <div class="social">
                                    <i class="fas fa-share-alt"></i>
                                    <ul>
                                        <li class="facebook">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li class="twitter">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="linkedin">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info">
                                <span>Farmer of potato</span>
                                <h4><a href="#">Sarah Albert</a></h4>
                            </div>
                        </div>
                    </div> -->
                    <!-- End Single Item -->

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Farmer -->


<?php include 'includes/testmonial.php'; ?>
<?php include 'includes/know-us.php'; ?>
<?php include 'includes/footer.php'; ?>