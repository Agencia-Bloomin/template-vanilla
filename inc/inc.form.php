<form class="form-contact" action="contato_envia.php" method="post" <?php if ($pageId == 'home') : ?> id="form-home"
    <?php elseif ($pageId == 'contact') : ?> id="form-contact" <?php else : ?> id="form-prod-int" <?php endif; ?>
    novalidate="novalidate">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Nome'" placeholder="Nome">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Insira o endereço de e-mail'" placeholder="E-mail">
            </div>
        </div>
        <div class="col-12">
            <div class="form-group <?= $pageId == 'single-product' ? 'product-form' : '' ?>">
                <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Assunto'" placeholder="Assunto"
                    <?= $pageId == 'single-product' ? 'value="' . $title . '"' : '' ?>>
            </div>
        </div>
        <?php if ($pageId == 'single-product') : ?>
        <div class="col-12">
            <div class="form-group">
                <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Telefone'" placeholder="Telefone">
            </div>
        </div>
        <?php endif; ?>
        <div class="col-12">
            <div class="form-group">
                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'"
                    placeholder=" Mensagem"></textarea>
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <div class="<?= $pageId == 'single-product' ? 'btn-prod' : 'd-flex' ?>">
            <button type="submit" class="btn <?= $pageId == 'single-product' ? 'mb-3' : '' ?>">
                <span>Enviar por E-mail</span>
            </button>
            <?php if(!empty(CONF_SITE_WHATSAPP_LINK)): ?>
            <a href='javascript:void(0)' class="btn whats-form" id="meuZap" data-zap="<?=CONF_SITE_WHATSAPP_LINK?>">
                <span>Enviar por Whatsapp</span>
            </a>
            <?php endif; ?>
        </div>
    </div>
</form>