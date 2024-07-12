<?php

function makeRequest($url, $verdil)
    {
        // Define o tempo de vida do cache em segundos
        $cacheTime = 86400;

        // Gera a chave de cache a partir da URL da API e seus parâmetros
        $cacheKey = md5($url);

        // Define o diretório de cache
        $cacheDir = 'cache/';

        // Verifica se o diretório de cache existe e cria a pasta se ela não existir
        if (!file_exists($cacheDir)) {
            mkdir($cacheDir, 0777, true);
        }

        // Verifica se o cache já existe e não está expirado
        if (file_exists($cacheDir . $cacheKey) && (time() - filemtime($cacheDir . $cacheKey) < $cacheTime)) {
            // Retorna o conteúdo do cache
            $response = file_get_contents($cacheDir . $cacheKey);
        } else {
            // Faz a consulta à API e armazena o resultado no cache
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

            file_put_contents($cacheDir . $cacheKey, $response);
        }

        return json_decode($response);
    }

    $urlPages = 'https://www.bloominprojetos.com.br/seo/api/cliente/paginas';
    $verdil = '23039ba87f9c5282ca79c429404c9f49'; //token default da bloomin

    $pageUrl = 'https://www.bloominprojetos.com.br/seo/api/cliente/pagina/' . $_GET['url'];
    $page = makeRequest($pageUrl, $verdil);

    $pages = makeRequest($urlPages, $verdil);

$title = $page->name;
$description = $page->description;

?>
<?php include 'inc/inc.seo.php'; ?>
<link rel="stylesheet" href="css/pg-seo.css">
<style>
    .galleryImages {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    }
</style>
</head>


<body class="seo">
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
    <!-- header-start -->
    <?php include 'inc/inc.header.php' ?>
    <!-- header-end -->

    <!--? Hero Start -->
    <?php include 'inc/inc.breadcrumb.php'?>
    <!-- Hero End -->

    <!--================End Home Banner Area =================-->

    <section class="team-area area-padding mt-3">
        <div class="container">
            <div class="area-heading mb-5">
                <div class="box thin row">
                    <aside class='menuLateral col-md-4'>
                        <span class='title'>Informações</span>

                        <ul>
                            <?php foreach ($pages as $menuItem) : ?>
                                <li>
                                    <a href="informacoes/<?= $menuItem->url; ?>"><?= $menuItem->name; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </aside>

                    <div class="col-md-8 col-xl-8 mb-5 mx-auto">
                        <div class="galleryImages">
                            <img src='<?= $page->cover; ?>' alt='<?= $page->name ?>' class='w-100' onerror="this.onerror=null;this.src='img/no-image.png';">
                            <?php if (!empty($page->galleryItem)) : ?>
                                <?php foreach ($page->galleryItem  as $gallery) : ?>
                                    <img src="<?= $gallery; ?>" alt='<?= $page->name ?>' class='w-100'>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <?= htmlspecialchars_decode($page->content); ?>
                        <?php
                        ?>
                    </div>

                </div>
            </div>
            <!-- <hr class="dif"> -->
            <div class="row">
                <div class="rowTab">
                    <div class="col">
                        <h2 class="text-center mb-5">Regiões que atendemos</h2>
                        <div class="d-flex">

                            <div class="tabs">
                                <div class="tab">
                                    <input type="checkbox" id="chck1">
                                    <label class="tab-label" for="chck1">Região Central</label>
                                    <div class="tab-content">
                                        <ul>
                                            <li><strong>Aclimação</strong></li>
                                            <li><strong>Bela Vista</strong></li>
                                            <li><strong>Bom Retiro</strong></li>
                                            <li><strong>Brás</strong></li>
                                            <li><strong>Cambuci</strong></li>
                                            <li><strong>Centro</strong></li>
                                            <li><strong>Consolação</strong></li>
                                            <li><strong>Higienópolis</strong></li>
                                            <li><strong>Glicério</strong></li>
                                            <li><strong>Liberdade</strong></li>
                                            <li><strong>Luz</strong></li>
                                            <li><strong>Pari</strong></li>
                                            <li><strong>República</strong></li>
                                            <li><strong>Santa Cecília</strong></li>
                                            <li><strong>Santa Efigênia</strong></li>
                                            <li><strong>Sé</strong></li>
                                            <li><strong>Vila Buarque</strong></li>
                                        </ul>
                                    </div>



                                </div>



                            </div>
                            <div class="tabs">
                                <div class="tab">
                                    <input type="checkbox" id="chck2">
                                    <label class="tab-label" for="chck2">Zona Norte</label>
                                    <div class="tab-content">
                                        <ul>
                                            <li><strong>Brasilândia</strong></li>
                                            <li><strong>Cachoeirinha</strong></li>
                                            <li><strong>Casa Verde</strong></li>
                                            <li><strong>Imirim</strong></li>
                                            <li><strong>Jaçanã</strong></li>
                                            <li><strong>Jardim São Paulo</strong></li>
                                            <li><strong>Lauzane Paulista</strong></li>
                                            <li><strong>Mandaqui</strong></li>
                                            <li><strong>Santana</strong></li>
                                            <li><strong>Tremembé</strong></li>
                                            <li><strong>Tucuruvi</strong></li>
                                            <li><strong>Vila Guilherme</strong></li>
                                            <li><strong>Vila Gustavo</strong></li>
                                            <li><strong>Vila Maria</strong></li>
                                            <li><strong>Vila Medeiros</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs">
                                <div class="tab">
                                    <input type="checkbox" id="chck3">
                                    <label class="tab-label" for="chck3">Zona Oeste</label>
                                    <div class="tab-content">
                                        <ul>
                                            <li><strong>Água Branca</strong></li>
                                            <li><strong>Bairro do Limão</strong></li>
                                            <li><strong>Barra Funda</strong></li>
                                            <li><strong>Alto da Lapa</strong></li>
                                            <li><strong>Alto de Pinheiros</strong></li>
                                            <li><strong>Butantã</strong></li>
                                            <li><strong>Freguesia do Ó</strong></li>
                                            <li><strong>Jaguaré</strong></li>
                                            <li><strong>Jaraguá</strong></li>
                                            <li><strong>Jardim Bonfiglioli</strong></li>
                                            <li><strong>Lapa</strong></li>
                                            <li><strong>Pacaembú</strong></li>
                                            <li><strong>Perdizes</strong></li>
                                            <li><strong>Perús</strong></li>
                                            <li><strong>Pinheiros</strong></li>
                                            <li><strong>Pirituba</strong></li>
                                            <li><strong>Raposo Tavares</strong></li>
                                            <li><strong>Rio Pequeno</strong></li>
                                            <li><strong>São Domingos</strong></li>
                                            <li><strong>Sumaré</strong></li>
                                            <li><strong>Vila Leopoldina</strong></li>
                                            <li><strong>Vila Sonia</strong></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="tabs">
                                <div class="tab">
                                    <input type="checkbox" id="chck4">
                                    <label class="tab-label" for="chck4">Zona Sul</label>
                                    <div class="tab-content">
                                        <ul>
                                            <li><strong>Aeroporto</strong></li>
                                            <li><strong>Água Funda</strong></li>
                                            <li><strong>Brooklin</strong></li>
                                            <li><strong>Campo Belo</strong></li>
                                            <li><strong>Campo Grande</strong></li>
                                            <li><strong>Campo Limpo</strong></li>
                                            <li><strong>Capão Redondo</strong></li>
                                            <li><strong>Cidade Ademar</strong></li>
                                            <li><strong>Cidade Dutra</strong></li>
                                            <li><strong>Cidade Jardim</strong></li>
                                            <li><strong>Grajaú</strong></li>
                                            <li><strong>Ibirapuera</strong></li>
                                            <li><strong>Interlagos</strong></li>
                                            <li><strong>Ipiranga</strong></li>
                                            <li><strong>Itaim Bibi</strong></li>
                                            <li><strong>Jabaquara</strong></li>
                                            <li><strong>Jardim Ângela</strong></li>
                                            <li><strong>Jardim América</strong></li>
                                            <li><strong>Jardim Europa</strong></li>
                                            <li><strong>Jardim Paulista</strong></li>
                                            <li><strong>Jardim Paulistano</strong></li>
                                            <li><strong>Jardim São Luiz</strong></li>
                                            <li><strong>Jardins</strong></li>
                                            <li><strong>Jockey Club</strong></li>
                                            <li><strong>M'Boi Mirim</strong></li>
                                            <li><strong>Moema</strong></li>
                                            <li><strong>Morumbi</strong></li>
                                            <li><strong>Parelheiros</strong></li>
                                            <li><strong>Pedreira</strong></li>
                                            <li><strong>Sacomã</strong></li>
                                            <li><strong>Santo Amaro</strong></li>
                                            <li><strong>Saúde</strong></li>
                                            <li><strong>Socorro</strong></li>
                                            <li><strong>Vila Andrade</strong></li>
                                            <li><strong>Vila Mariana</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <div class="tabs">


                                <div class="tab">
                                    <input type="checkbox" id="chck5">
                                    <label class="tab-label" for="chck5">Zona Leste</label>
                                    <div class="tab-content">
                                        <ul>
                                            <li><strong>Água Rasa</strong></li>
                                            <li><strong>Anália Franco</strong></li>
                                            <li><strong>Aricanduva</strong></li>
                                            <li><strong>Artur Alvim</strong></li>
                                            <li><strong>Belém</strong></li>
                                            <li><strong>Cidade Patriarca</strong></li>
                                            <li><strong>Cidade Tiradentes</strong></li>
                                            <li><strong>Engenheiro Goulart</strong></li>
                                            <li><strong>Ermelino Matarazzo</strong></li>
                                            <li><strong>Guianazes</strong></li>
                                            <li><strong>Itaim Paulista</strong></li>
                                            <li><strong>Itaquera</strong></li>
                                            <li><strong>Jardim Iguatemi</strong></li>
                                            <li><strong>José Bonifácio</strong></li>
                                            <li><strong>Moóca</strong></li>
                                            <li><strong>Parque do Carmo</strong></li>
                                            <li><strong>Parque São Lucas</strong></li>
                                            <li><strong>Parque São Rafael</strong></li>
                                            <li><strong>Penha</strong></li>
                                            <li><strong>Ponte Rasa</strong></li>
                                            <li><strong>São Mateus</strong></li>
                                            <li><strong>São Miguel Paulista</strong></li>
                                            <li><strong>Sapopemba</strong></li>
                                            <li><strong>Tatuapé</strong></li>
                                            <li><strong>Vila Carrão</strong></li>
                                            <li><strong>Vila Curuçá</strong></li>
                                            <li><strong>Vila Esperança</strong></li>
                                            <li><strong>Vila Formosa</strong></li>
                                            <li><strong>Vila Matilde</strong></li>
                                            <li><strong>Vila Prudente</strong></li>
                                        </ul>
                                    </div>
                                </div>



                            </div>
                            <div class="tabs">
                                <div class="tab">
                                    <input type="checkbox" id="chck6">
                                    <label class="tab-label" for="chck6">Grande São Paulo</label>
                                    <div class="tab-content">
                                        <ul>
                                            <li><strong>São Caetano do sul</strong></li>
                                            <li><strong>São Bernardo do Campo</strong></li>
                                            <li><strong>Santo André</strong></li>
                                            <li><strong>Diadema</strong></li>
                                            <li><strong>Guarulhos</strong></li>
                                            <li><strong>Suzano</strong></li>
                                            <li><strong>Ribeirão Pires</strong></li>
                                            <li><strong>Mauá</strong></li>
                                            <li><strong>Embu</strong></li>
                                            <li><strong>Embu Guaçú</strong></li>
                                            <li><strong>Embu das Artes</strong></li>
                                            <li><strong>Itapecerica da Serra</strong></li>
                                            <li><strong>Osasco</strong></li>
                                            <li><strong>Barueri</strong></li>
                                            <li><strong>Jandira</strong></li>
                                            <li><strong>Cotia</strong></li>
                                            <li><strong>Itapevi</strong></li>
                                            <li><strong>Santana de Parnaíba</strong></li>
                                            <li><strong>Caierias</strong></li>
                                            <li><strong>Franco da Rocha</strong></li>
                                            <li><strong>Taboão da Serra</strong></li>
                                            <li><strong>Cajamar</strong></li>
                                            <li><strong>Arujá</strong></li>
                                            <li><strong>Alphaville</strong></li>
                                            <li><strong>Mairiporã</strong></li>
                                            <li><strong>ABC</strong></li>
                                            <li><strong>ABCD</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs">
                                <div class="tab">
                                    <input type="checkbox" id="chck7">
                                    <label class="tab-label" for="chck7">Litoral de São Paulo</label>
                                    <div class="tab-content">
                                        <ul>
                                            <li><strong>Bertioga</strong></li>
                                            <li><strong>Cananéia</strong></li>
                                            <li><strong>Caraguatatuba</strong></li>
                                            <li><strong>Cubatão</strong></li>
                                            <li><strong>Guarujá</strong></li>
                                            <li><strong>Ilha Comprida</strong></li>
                                            <li><strong>Iguape</strong></li>
                                            <li><strong>Ilhabela</strong></li>
                                            <li><strong>Itanhaém</strong></li>
                                            <li><strong>Mongaguá</strong></li>
                                            <li><strong>Riviera de São Lourenço</strong></li>
                                            <li><strong>Santos</strong></li>
                                            <li><strong>São Vicente</strong></li>
                                            <li><strong>Praia Grande</strong></li>
                                            <li><strong>Ubatuba</strong></li>
                                            <li><strong>São Sebastião</strong></li>
                                            <li><strong>Peruíbe</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
    </section>



    <!-- Footer -->
    <?php include 'inc/inc.footer.php'; ?>
    <!-- JavaScript -->
    <?php include 'inc/inc.js.php'; ?>
    <!--cdn slick script-->
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->
</body>

</html>