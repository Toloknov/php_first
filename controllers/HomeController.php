<?php

namespace Controllers;


class HomeController extends MainController
{
  public function index()
  {
    $this->render('home', ['title' => 'Home page']);
  }
}
