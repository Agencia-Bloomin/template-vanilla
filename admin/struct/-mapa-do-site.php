<?php

namespace Source;

require_once 'admin/vendor/autoload.php';

use Source\Info;

$categories = (new Info())->getAllMainCategories();

include 'inc/inc.seo.php'
?>
<?php
function makeRequest($url, $verdil)
{

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_HTTPHEADER => [
            'Verdil: ' . $verdil
        ],
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url
    ]);

    $response = curl_exec($curl);

    curl_close($curl);




    return json_decode($response);
}

$url = 'https://www.bloominprojetos.com.br/seo/api/cliente/paginas';
$verdil = '23039ba87f9c5282ca79c429404c9f49';

$pages = makeRequest($url, $verdil);


?>
</head>

<body>
    <!-- header-start -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header-end -->

    <!--? Hero Start -->
    <div class="slider-area2">
        <div class="slider-height2 hero-overly d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 ajust-padding">
                            <h1><?= $title ?></h1>
                            <p class="color-w"><a class="ajust-link" href="./" title="Ir ao início">Home</a> | <a class="ajust-link"><?= $title ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- ================ contact section start ================= -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 map-link">
                    <i class="fa fa-link mr-3"> </i> <a href="./">Home</a> </br>
                    <i class="fa fa-link mr-3"> </i> <a href="sobre">A Empresa</a> </br>
                    <i class="fa fa-link mr-3"> </i> <a href="produtos">Produtos</a> </br>
                    <?php if (!empty($categories)) :
                        $displayedProducts = [];
                        foreach ($categories as $cat) :
                            $subcats = (new Info())->getAllCategoriesByFatherId($cat->id); ?>

                            <i class="fa fa-link mr-3"> </i> <a href="<?= $cat->url ?>"><?= $cat->name ?></a> </br>
                            <?php if (!empty($subcats)) : ?>

                                <?php foreach ($subcats as $sub) :
                                    $subProds = (new Info())->getProductsByCatId($sub->id); ?>
                                    <i class="fa fa-link mr-3"> </i> <a href="<?= $sub->url ?>"><?= $sub->name ?></a> </br>
                                    <?php if (!empty($subProds)) :
                                        foreach ($subProds as $subprod) :
                                            if (!in_array($subprod->id, $displayedProducts)) :
                                                $displayedProducts[] = $subprod->id; ?>

                                                <i class="fa fa-link mr-3"> </i> <a href="<?= $subprod->url ?>"><?= $subprod->name ?></a> </br>
                                    <?php
                                            endif;
                                        endforeach;
                                    endif;
                                    ?>
                                <?php endforeach; ?>

                                <?php else :
                                $products = (new Info())->getProductsByCatId($cat->id);
                                if (!empty($products)) :
                                    foreach ($products as $prod) :
                                        if (!in_array($prod->id, $displayedProducts)) :
                                            $displayedProducts[] = $prod->id; ?>
                                            <i class="fa fa-link mr-3"> </i> <a href="<?= $prod->url ?>"><?= $prod->name ?></a> </br>
                    <?php
                                        endif;
                                    endforeach;
                                endif;
                            endif;
                        endforeach;
                    endif;
                    ?>
                    <i class="fa fa-link mr-3"> </i> <a href="politica-de-privacidade">Política de Privacidade</a> </br>
                    <i class="fa fa-link mr-3"> </i> <a href="contato">Contato</a> </br>
                </div>
                <div class="col-md-6 map-link">
                    <!-- <?php foreach ($pages as $page) : ?>
                    <i class="fa fa-link mr-3"> </i> <a href="palavra-chave/<?= $page->url ?>"><?= $page->name; ?></a> </br>
                <?php endforeach; ?> -->
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->
    <?php include 'inc/inc.parallax.php' ?>
    <!-- footer start -->
    <?php include 'inc/inc.footer.php' ?>
    <!--/ footer end  -->

    <!-- JS here -->
    <?php include 'inc/inc.js.php' ?>
</body>

</html>