<?php

namespace Classes;

class Cart implements CartInterface
{

  private array $products = [];

  public function getProducts(): array
  {
    return $this->products;
  }

  public function addProduct(ProductInterface $product, int $quality = 1): void
  {
    $this->products[$product->getId()] = $quality;
  }

  public function removeProduct(int $id): void
  {
    unset($this->products[$id]);
  }

  public function update(int $productId, int $quantity): void
  {
    foreach (array_keys($this->products) as $key) {
      if ($key == $productId) {
        $this->products[$key] = $quantity;
      } else {
        echo "Product not found";
      }
    }
  }
}
