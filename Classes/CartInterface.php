<?php
namespace Classes;
interface CartInterface
{
    public function addProduct(ProductInterface $product,int $quality): void;
    public function removeProduct(int $id): void;
    public function update(int $productId,int   $quantity): void;
}