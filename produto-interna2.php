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
    <section class="product-area section-padding">
        <div class="container">
            <div class="row justify-content-between mb-5">
                <div class="col-lg-6">
                    <div class="swiper-slide">
                        <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div>
                        <h2 class="mb-4">Confira os detalhes de nosso produto</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quod laborum sapiente
                            aliquid
                            provident porro atque! Repellendus aliquam ab quis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus perspiciatis quasi
                            necessitatibus voluptatibus esse!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corporis nam ea maiores
                            inventore
                            dignissimos illum nesciunt sequi maxime animi ullam accusantium, cum dicta ratione itaque
                            molestias
                            dolore distinctio provident!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, repellendus. Ipsam nisi
                            tempore
                            quisquam fugiat?</p>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-12">
                    <div class="swiper prodintSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                            </div>
                            <div class="swiper-slide">
                                <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between mb-5">
                <div class="col-lg-5 d-flex align-items-center">
                    <div>
                        <div class="menu-sidebar">
                            <!-- web-->
                            <div class="accordion">
                                <div class="accordion-item">
                                    <button id="accordion-button-1" aria-expanded="true"><span
                                            class="accordion-title">Pergunta 1</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa esse eaque
                                            excepturi consequuntur
                                            molestiae fuga, praesentium maxime neque ut omnis earum, repellendus,
                                            expedita eum fugit.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-2" aria-expanded="false"><span
                                            class="accordion-title">Pergunta 2</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa esse eaque
                                            excepturi consequuntur
                                            molestiae fuga, praesentium maxime neque ut omnis earum, repellendus,
                                            expedita eum fugit.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-3" aria-expanded="false"><span
                                            class="accordion-title">Pergunta 3</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa esse eaque
                                            excepturi consequuntur
                                            molestiae fuga, praesentium maxime neque ut omnis earum, repellendus,
                                            expedita eum fugit.</p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <button id="accordion-button-4" aria-expanded="false"><span
                                            class="accordion-title">Pergunta 4</span><span class="icon"
                                            aria-hidden="true"></span></button>
                                    <div class="accordion-content">
                                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa esse eaque
                                            excepturi consequuntur
                                            molestiae fuga, praesentium maxime neque ut omnis earum, repellendus,
                                            expedita eum fugit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="swiper-slide">
                        <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                    </div>
                </div>
            </div>
        </div>

        <div class="container buttons">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <a href="<?= CONF_SITE_WHATSAPP_LINK?>" target="_blank" class="btn whats-form">Entre em contato</a>
                </div>
                <div class="col-lg-4">
                    <button class="toggleButton btn" data-target="moreText1">Leia mais</button>
                </div>
            </div>
        </div>

        <div class="container mt-4 moreText" id="moreText1">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas justo in suscipit
                        efficitur. Nunc rutrum velit ante, ut accumsan arcu vulputate ut. Phasellus vel risus sodales,
                        vestibulum odio sed, maximus arcu. Duis congue, sapien id congue lacinia, metus diam laoreet
                        dui, scelerisque venenatis lacus lectus sit amet odio. Maecenas quis odio lorem. Sed in
                        tristique augue. Nullam quis sapien tellus. Maecenas sed arcu tristique ipsum iaculis varius at
                        quis urna.</p>
                </div>
            </div>

            <div class="row mb-5 img-text">
                <div class="col-lg-6 d-flex">
                    <div class="content-padding">
                        <h2 class="mb-4">Lorem ipsum dolor sit amet.</h2>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas justo in suscipit
                            efficitur. Nunc rutrum velit ante, ut accumsan arcu vulputate ut. Phasellus vel risus
                            sodales, vestibulum odio sed, maximus arcu. Duis congue, sapien id congue lacinia, metus
                            diam laoreet dui, scelerisque venenatis lacus lectus sit amet odio. Maecenas quis odio
                            lorem. Sed in tristique augue. Nullam quis sapien tellus. Maecenas sed arcu tristique ipsum
                            iaculis varius at quis urna.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between mb-5">
                <div class="col-lg-6">
                    <div class="swiper-slide">
                        <img class="img-fluid " src="img/gallery/about.jpg" alt="Produto 1" title="Produto 1">
                    </div>
                </div>
                <div class="col-lg-5 d-flex align-items-center">
                    <div>
                        <h2 class="mb-4">Lorem ipsum dolor sit amet.</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quod laborum sapiente
                            aliquid
                            provident porro atque! Repellendus aliquam ab quis.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repellendus perspiciatis quasi
                            necessitatibus voluptatibus esse!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum corporis nam ea maiores
                            inventore
                            dignissimos illum nesciunt sequi maxime animi ullam accusantium, cum dicta ratione itaque
                            molestias
                            dolore distinctio provident!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, repellendus. Ipsam nisi
                            tempore
                            quisquam fugiat?</p>
                    </div>
                </div>
            </div>

            <div class="home-form">
                <div class="row justify-content-center">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div>
                            <h2 class="mb-4">Lorem ipsum dolor sit amet.</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas justo in suscipit
                                efficitur. Nunc rutrum velit ante, ut accumsan arcu vulputate ut. Phasellus vel risus
                                sodales, vestibulum odio sed, maximus arcu. Duis congue, sapien id congue lacinia, metus
                                diam laoreet dui, scelerisque venenatis lacus lectus sit amet odio. Maecenas quis odio
                                lorem. Sed in tristique augue. Nullam quis sapien tellus. Maecenas sed arcu tristique
                                ipsum iaculis varius at quis urna.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas justo in suscipit
                                efficitur. Nunc rutrum velit ante, ut accumsan arcu vulputate ut. Phasellus vel risus
                                sodales, vestibulum odio sed, maximus arcu. Duis congue, sapien id congue lacinia, metus
                                diam laoreet dui, scelerisque venenatis lacus lectus sit amet odio. Maecenas quis odio
                                lorem. Sed in tristique augue. Nullam quis sapien tellus. Maecenas sed arcu tristique
                                ipsum iaculis varius at quis urna.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <div>
                            <?php include 'inc/inc.form.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'inc/inc.cta.php' ?>

    <!-- ================ section end ================= -->

    <!-- footer start -->
    <?php include 'inc/inc.footer.php' ?>
    <!-- footer end  -->

    <!-- JS here -->
    <?php include 'inc/inc.js.php' ?>
</body>

</html>