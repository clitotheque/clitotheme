<?php
namespace App\Data;

class Resource extends ACFPost
{
  public $creators;
  public $ignore_month;
  public $ignore_day;
  public $mature;
  public $free;
  public $review;
  public $related;

  function __construct($post) {
    parent::__construct($post);
  }

  protected function init_acf($post) {
    $pid = $post->ID;

    $this->creators =
      array_map(
        function ($p){
          return new Creator($p);
        },
        (array) get_field('creator', $pid));

    $igd = get_field('ignore_day', $pid);
    $this->ignore_day = strcmp(
      (count($igd) > 0) ? $igd[0] : '',
      'ignoreday') == 0;

    $igm = get_field('ignore_month', $pid);
    $this->ignore_month = $this->ignore_day && strcmp(
      (count($igm) > 0) ? $igm[0] : '',
      'ignoremonth') == 0;

    $pdate = strtotime(get_field('publication_date', $pid, false));

    if($this->ignore_day) {
      if($this->ignore_month) {
        $this->pub_date = date_i18n('Y', $pdate);
      } else {
        $this->pub_date = date_i18n('M Y', $pdate);
      }
    } else {
      $this->pub_date = date_i18n('d M Y', $pdate);
    }

    $this->mature = get_field('mature', $pid);

    $this->free = get_field('free_content', $pid);

    $this->review = nl2br(htmlspecialchars(get_field('review', $pid)));

    $this->related = (array) get_field('related_content', $pid);
  }
}
