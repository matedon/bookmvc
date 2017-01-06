<?php

namespace Konyv\Controllers;

use stdClass;

class Controller extends stdClass
{
  public function view($view)
  {
    include $view;
  }
}
