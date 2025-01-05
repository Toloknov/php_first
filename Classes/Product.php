<?php

declare(strict_types=1);

namespace Classes;

class Product implements ProductInterface
{
  private $id;
  private string $title;
  private string $description;

  public function __construct($id, string $title, string $description)
  {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTitle():string
  {
    return $this->title;
  }

  public function getDescription():string
  {
    return $this->description;
  }
}
