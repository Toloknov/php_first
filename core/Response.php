<?php

namespace Core;

class Response
{

  public function redirect(string $url): void
  {
    header('Location: ' . $url);
  }

  public function setStatusCode(int $code): void
  {
    http_response_code($code);
    if ($code === 404) {
      require 'views/404.php';
      exit;
    }
  }
}
