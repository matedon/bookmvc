<?php

namespace Konyv\Controllers;

use Autoloader;
use stdClass;

class Controller extends stdClass
{
  protected $viewsPath;
  protected $view;
  protected $layout;

  public function __construct()
  {
    $this->viewsPath = Autoloader::getPath(__NAMESPACE__) . '/../Views/';
  }

  public function setLayout($layout)
  {
    $this->layout = $layout;
  }

  public function setView($view)
  {
    $this->view = $view;
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

  public function renderLayout()
  {
    $this->render($this->viewsPath . 'layouts/' . $this->layout . '.php');
  }

  public function renderView($view = null)
  {
    if (is_null($view)) {
      $view = $this->view;
    }
    $this->render($this->viewsPath . $view . '.php');
  }

  public function get($key)
  {
    if (isset($_GET[$key])) {
      return $_GET[$key];
    }
  }

  public function post($key)
  {
    if (isset($_POST[$key])) {
      return $_POST[$key];
    }
  }

  public function request($key)
  {
    $request = $this->post($key);
    if ($request) {
      return $request;
    }
    return $this->get($key);
  }
}
