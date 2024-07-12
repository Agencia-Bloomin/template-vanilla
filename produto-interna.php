<?php 
$title = !empty($title) ? $title : '';
include 'inc/inc.seo.php' ?>
</head>

<body>
    <!-- header-start -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header-end -->

    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height hero-overly d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="hero-cap text-center ajust-padding">
                            <h1><?= $title ?></h1>
                            <div class="divider m-auto mb-1"></div>
                            <p class="color-w"><a class="ajust-link" href="./" title="Ir ao início">Home</a> |<a
                                    class="ajust-link" href="produtos" title="Ir aos produtos"> Produtos</a> | <a
                                    class="ajust-link"><?= $title ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- ================ section start ================= -->
    <section class="product-area section-padding overflow-unset">
        <div class="container p-relative">
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-4 padding-lg-right">
                    <h2 class="mb-4">Confira os detalhes de nosso produto</h2>
                    <div class="ajust-float mb-4">
                        <div class="swiper prodintSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1"
                                        title="Produto 1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1"
                                        title="Produto 1">
                                </div>
                                <div class="swiper-slide">
                                    <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1"
                                        title="Produto 1">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quod laborum sapiente aliquid
                        provident porro atque! Repellendus aliquam ab quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus perspiciatis quasi
                        necessitatibus voluptatibus esse!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corporis nam ea maiores inventore
                        dignissimos illum nesciunt sequi maxime animi ullam accusantium, cum dicta ratione itaque
                        molestias
                        dolore distinctio provident!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, repellendus. Ipsam nisi tempore
                        quisquam fugiat?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quod laborum sapiente aliquid
                        provident porro atque! Repellendus aliquam ab quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus perspiciatis quasi
                        necessitatibus voluptatibus esse!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corporis nam ea maiores inventore
                        dignissimos illum nesciunt sequi maxime animi ullam accusantium, cum dicta ratione itaque
                        molestias
                        dolore distinctio provident!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, repellendus. Ipsam nisi tempore
                        quisquam fugiat?</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quod laborum sapiente aliquid
                        provident porro atque! Repellendus aliquam ab quis.</p>
                </div>
                <div class="col-lg-4 col-md-8">
                <?php include 'inc/inc.sidebar.php'?>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/inc.cta.php'?>

    <!-- ================ section end ================= -->

    <!-- footer start -->
    <?php include 'inc/inc.footer.php' ?>
    <!-- footer end  -->

    <!-- JS here -->
    <?php include 'inc/inc.js.php' ?>
</body>

</html>