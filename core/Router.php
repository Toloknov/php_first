<?php

namespace Core;

use Core\Response;

class Router
{
  protected array $routers;

  public function __construct(array $routers)
  {
    $this->routers = $routers;
  }

  public function dispatch(Request $request):void
  {
    $path = $request->getPath();
    $response = new Response();
    if (array_key_exists($path, $this->routers)) {
      [$controller, $page] = explode('@', $this->routers[$path]);
      $controller = "controllers\\$controller";
      if (class_exists($controller)) {
        $controller = new $controller();
        if (method_exists($controller, $page)) {
          $controller->$page();
          return;
        }
      }
    }
    $response->setStatusCode(404);
  }
}
