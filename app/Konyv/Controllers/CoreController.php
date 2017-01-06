<?php

namespace Konyv\Controllers;

class CoreController extends Controller
{
  public $name;

  protected $controller;


  public function __construct()
  {
    $name = isset($_GET['go']) ? $_GET['go'] : 'home';
    $current = __NAMESPACE__ . '\\' . ucfirst($name) . 'Controller';
    $controller = new $current();
    $controller->setView($name);
    $controller->setLayout('main');
    $controller->renderLayout();
  }
}
