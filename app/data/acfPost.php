<?php
namespace App\Data;


abstract class ACFPost
{
  public $p;

  abstract protected function init_acf($post);

  function __construct($post) {
    $this->p = $post;

    $this->init_acf($post);
  }

}
