<?php

namespace Source;

require_once 'admin/vendor/autoload.php';

use Source\Info;

$id = intval($_GET['id']);
$catId = $_GET['cat_id'];

$categoriesMenu = null;
$prodsMenu = (new Info())->getRelatedProductsByCatId($catId, $id);


if (empty($prodsMenu)) {
  $categoriesMenu = (new Info())->getAllMainCategories();
}
$product = (new Info())->getProductById($id);

$title = $product->name;

include 'inc/inc.seo.php'; ?>
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
              <p class="color-w"><a class="ajust-link" href="./" title="Ir ao início">Home</a> |<a class="ajust-link" href="produtos" title="Ir aos produtos"> Produtos</a> | <a class="ajust-link"><?= $title ?></a>
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
      <div class="row justify-content-between">
        <div class="col-lg-7 mb-4">
          <div class="mb-4">
            <h2>Confira os detalhes de nosso produto</h2>
          </div>
          <?php if (!empty($product->content)) : ?>
            <p><?= $product->content ?></p>
          <?php endif; ?>
          <div class="d-flex justify-content-center mb-4">
            <img src="admin/<?= $product->cover ?>" alt="<?= $title ?>" title="<?= $title ?>" class="img-fluid img-prod-int" onerror="this.onerror=null;this.src='img/gallery/no-image.png';">
          </div>
          <?php if (!empty($product->adictional_info)) : ?>
            <p><?= $product->adictional_info ?></p>
          <?php endif; ?>
        </div>
        <div class="col-lg-4">
          <div class="section-title mb-4">
            <h3 class="h3-form">Entre em contato agora mesmo <i class="fa-solid fa-turn-down"></i></h3>
          </div>
          <form class="form-contact" action="contato_envia.php" method="post" id="form-prod-int" novalidate="novalidate">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder="Nome">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira o endereço de e-mail'" placeholder="E-mail">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" placeholder="Assunto">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" placeholder=" Mensagem"></textarea>
                </div>
              </div>
            </div>
            <div class="form-group mt-3 text-center">
              <div class="btn-prod">
                <button type="submit" class="btn mb-3">
                  <span>Enviar por E-mail</span>
                </button>
                <a href='javascript:void(0)' class="btn whats-form" id="meuZap" data-zap="<?= CONF_SITE_WHATSAPP_LINK ?>">
                  <span>Enviar por Whatsapp</span>
                </a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php include 'inc/inc.cta.php' ?>

  <!-- ================ section end ================= -->

  <!-- footer start -->
  <?php include 'inc/inc.footer.php' ?>
  <!--/ footer end  -->

  <!-- JS here -->
  <?php include 'inc/inc.js.php' ?>
</body>

</html>