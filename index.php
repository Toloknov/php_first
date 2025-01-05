<?php

declare(strict_types=1);
require "autoloader.php";

use Classes\Product;
use Classes\Cart;

$cart = new Cart();
$book1 = new Product(3, "Вини пух 1", "Супер мультик 1");
$book2 = new Product(11, "Вини пух 2", "Супер мультик 2");


echo "<pre>";
$cart->addProduct($book1,2);
$cart->addProduct($book2,3);
// $cart->removeProduct($book2->getId());
$cart->update($book1->getId(), 5);
var_dump($cart->getProducts());