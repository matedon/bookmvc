<?php

namespace Konyv\Controllers;

use Konyv\Models\BookModel;

class SearchController extends Controller
{
  protected $type;
  protected $bookModel;

  public function __construct()
  {
    parent::__construct();
    $this->bookModel = new bookModel();
    $this->getType();
  }

  public function getType()
  {
    if (isset($_POST['type'])) {
      $this->type = $_POST['type'];
    } else {
      $this->type = $_GET['type'];
    }
  }

  public function typeSelect($type)
  {
    if ($this->type == $type) {
      return 'selected';
    }
  }

  public function search()
  {

  }

}
