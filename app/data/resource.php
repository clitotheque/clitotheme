<?php
namespace App\Data;

class Resource extends ACFPost
{
  public $creators;

  function __construct($post) {
    parent::__construct($post);
  }

  protected function init_acf($post) {
    $this->creators =
    array_map(
      function ($p){
        return new Creator($p);
      },
      (array) get_field('creator', $post->ID));
  }
}
