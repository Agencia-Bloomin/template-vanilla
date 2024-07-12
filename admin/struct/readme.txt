***********************************
********* Arquivos da ADM *********
***********************************

*** No ---- inc.config.php ->

# inserir o "define" se não houver e ajustar tag base com a / no final !

define("CONF_TAG_BASE", "minha-url/");



*** No ---- inc.seo.php ->

<head>
  <?php include_once 'inc/inc.config.php'; ?>
  <!-- Sempre checar se está OK daqui para baixo -->
  <base href="<?= CONF_TAG_BASE; ?>">

# inserir o include no inicio do "head" e remover outros includes do inc config de dentro do inc.seo se houver, para não dar erro de duplicidade.




*** No  ---- adm/src/Config.php

# Verificar se existe a chamada no root da ADM.

<?php
include_once _DIR_ . '/../../inc/inc.config.php';

define("ROOT", CONF_TAG_BASE . "admin");


# Ajustar conexão com o Banco correto

define("DATA_LAYER_CONFIG", [ .....


************************************
********* Arquivos da Raiz *********
************************************


# Escolha os arquivos de acordo com a necessidade, já montados para ter menu lateral ou sem menu lateral em suas respectivas pastas.

# E ajuste a estrutura de exibição conforme o padrão do site em que for implementado.

# Utilizar padrão de busca do banco no mapa do site da Raiz