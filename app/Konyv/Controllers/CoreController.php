<?php

namespace Konyv\Controllers;

use Autoloader;

class CoreController extends Controller
{
  protected $controller;
  protected $viewsPath;
  protected $view;

  public function __construct()
  {
    $urlToGo = isset($_GET['go']) ? $_GET['go'] : 'welcome';
    $controller = ucfirst($urlToGo) . 'Controller';
    Autoloader::loader($controller);

    $this->viewsPath = getcwd() . '/app/' . str_replace('\\', '/', __NAMESPACE__) . '/../Views/';
    $this->view = $this->viewsPath . $urlToGo . '.php';

    $this->render($this->viewsPath . 'layouts/main.php');
  }

  public function render($view = null)
  {
    if (is_null($view)) {
      $view = $this->view;
    }
    if (file_exists($view)) {
      include($view);
    }
  }
}
