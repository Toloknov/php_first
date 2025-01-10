<?php

namespace Controllers;

class MainController
{
  private function myDir(): string
  {
    return str_replace('controllers', '', __DIR__);
  }
  public function render($view, $data): void
  {
    extract($data);
    $name = 'John';

    require $this->myDir() . '/views/layouts/head.php';
    require $this->myDir() . "views/$view.php";
    require $this->myDir() . 'views/layouts/end.php';
  }
}
