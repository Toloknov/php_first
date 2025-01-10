<?php

namespace Controllers;

class AboutController extends MainController
{

  public function index()
  {
    $this->render('about', ['title' => 'About page']);
  }
}
