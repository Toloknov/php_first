<?php

namespace Controllers;

class ContactController extends MainController
{
  public function index()
  {
    $this->render('contact', ['title' => 'Contact page']);
  }
}
