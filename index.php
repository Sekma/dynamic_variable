<?php
/**
* @author Antoine
*
* @description passage par référence
*/

// variables

$products = ['apple' => 1.5, 'orange' => 2.5, 'raspberry' => 4.5];
$fr = 0.2;
$en = 0.15;
$tn= 0.19;

$lang = 'fr';

// code utiles

function modify(&$products, $tva)
{
    foreach($products as $name => $price){
         $products[$name] = $price*$tva + $price;
    }
}

// code principal

modify($products, $$lang);

echo '<pre>';
print_r($products);
echo '</pre>';
