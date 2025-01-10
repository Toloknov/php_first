<?php

namespace Core;

class Request
{
  public function getPath(): string
  {
    $uri = $_SERVER['REQUEST_URI'] ?? '/';

    if (strpos($uri, '?') !== false) {
      $uri = substr($uri, 0, strpos($uri, '?'));
    }
    return substr($uri, 1);;
  }
  public function getMethod():string
  {
    return strtolower($_SERVER['REQUEST_METHOD']);
  }
}
