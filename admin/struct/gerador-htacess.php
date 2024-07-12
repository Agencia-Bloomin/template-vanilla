<?php

namespace Source;

require_once 'admin/vendor/autoload.php';

use Source\Info;


// $categories = (new Info())->getAllCategories();



// $produtcts = (new Info())->getAllProducts();

// foreach($categories as $category) {
//     if(!empty($category->url)) {
//     print_r($category->url);
//     echo "<br>";
//     }
// }

// foreach ($produtcts as $product) {
//   if (!empty($product->url)) {
//     print_r($product->url);
//     echo "<br>";
//   }
// }


// Alterar as funções chamadas acima, no Info.php utilizando o código abaixo somente lá

// if (empty($cat->url)) {
//   $urlMontada = makeUrl($cat->name);
//   $cat->url = "RewriteRule ^categoria/{$urlMontada}\/?$ produtos.php?id={$cat->id}&father_id={$cat->father_id} [NC,L]<br>RewriteRule ^categoria/{$urlMontada}\/([a-z,0-9,_-]+)\/([0-9-]+)\/?$ produtos.php?id={$cat->id}&father_id={$cat->father_id} [NC,L]";
// } else {
//   if (substr($cat->url, -1) === "/") {
//     $cat->url = substr($cat->url, 0, -1);
//   }
//   $cat->url = "RewriteRule ^{$cat->url}\/?$ produtos.php?id={$cat->id}&father_id={$cat->father_id} [NC,L]<br>RewriteRule ^{$cat->url}\/([a-z,0-9,_-]+)\/([0-9-]+)\/?$ produtos.php?id={$cat->id}&father_id={$cat->father_id} [NC,L]";
// }


// if (empty($prod->url)) {
//   $urlMontada = makeUrl($prod->name);
//   $prod->url = "RewriteRule ^produto/{$urlMontada}\/?$ prod.php?id={$prod->id}&cat_id={$prod->category_id} [NC,L]<br>RewriteRule ^produto/{$urlMontada}\/([a-z,0-9,_-]+)\/([0-9-]+)\/?$ prod.php?id={$prod->id}&cat_id={$prod->category_id} [NC,L]";
// } else {
//   if (substr($prod->url, -1) === "/") {
//     $prod->url = substr($prod->url, 0, -1);
//   }
//   $prod->url = "RewriteRule ^{$prod->url}\/?$ prod.php?id={$prod->id}&cat_id={$prod->category_id} [NC,L]<br>RewriteRule ^{$prod->url}\/([a-z,0-9,_-]+)\/([0-9-]+)\/?$ prod.php?id={$prod->id}&cat_id={$prod->category_id} [NC,L]";
// }
