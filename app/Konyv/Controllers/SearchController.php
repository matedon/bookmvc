<?php

namespace Konyv\Controllers;

use Konyv\Models\BookModel;

class SearchController extends Controller
{
  protected $type;
  protected $books;
  protected $bookModel;

  public function __construct()
  {
    parent::__construct();
    $this->bookModel = new bookModel();
    $this->getType();
    $this->search();
  }

  public function getType()
  {
    $this->type = $this->request('type');
  }

  public function typeSelect($type)
  {
    if ($this->type == $type) {
      return 'selected';
    }
  }

  public function search()
  {
    $search = $this->request('search');
    if ($search) {
      $this->books = $this->bookModel->getByValues([
        $this->type => $this->request('search')
      ]);
    }
  }

}
