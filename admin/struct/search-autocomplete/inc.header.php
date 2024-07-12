<?php

namespace Source;

require_once 'admin/vendor/autoload.php';

use Source\Info;

$prodsSearch = (new Info())->getAllProductsName();
$items = [];
foreach ($prodsSearch as $prod) {
   array_push($items, mb_strtoupper($prod->name));
}
$items_json = json_encode($items);
echo "<script>var items = $items_json</script>"

?>
<header>

   <!-- Search-->
   <div class="search-cart d-none d-lg-block">
      <div class="search-box">
         <form class="position-relative" method="post" action="produtos">
            <input autocomplete="off" class="pesq" type="text" list="search" name="search" id="mySearch" placeholder="Pesquisar" onmouseover="focus();old = value;" onmousedown="value = '';" onmouseup="value = old;">
            <div id="search"></div>
            <button class="mouseHover" type="submit"><i class="fa-solid fa-search"></i></button>
         </form>
      </div>
   </div>

   <!-- Search mobile-->
   <div class="lupa-mob d-block d-lg-none">
      <div onclick="showBuscar(this)" class="lupa-btn">
         <i class="fa-solid fa-search"></i>
      </div>
      <div class="search-cart ">
         <div class="search-box">
            <form class="position-relative" method="post" action="produtos">
               <input autocomplete="off" class="pesq" type="text" list="search" name="search" id="mySearch" placeholder="Pesquisar">
               <div id="search"></div>
               <button class="mouseHover" type="submit"><i class="fa-solid fa-search"></i></button>
            </form>
         </div>
      </div>
   </div>

</header>