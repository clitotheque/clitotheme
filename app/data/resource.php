<?php
namespace App\Data;

class Resource extends ACFPost
{
  public $creators = null;
  public $ignore_month = null;
  public $ignore_day = null;
  public $mature = null;
  public $free = null;
  public $review = null;
  public $related = null;
  public $categories = null;

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
      ($igd) ? $igd[0] : '',
      'ignoreday') == 0;

    $igm = get_field('ignore_month', $pid);
    $this->ignore_month = $this->ignore_day && strcmp(
      ($igm > 0) ? $igm[0] : '',
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

    $categories = array_map(
      function($cid) {
        return get_category($cid);
      },
      wp_get_post_categories($pid)
    );
    $this->categories = $categories;


    $this->related = function () {
      var_dump('pouet');
      return array_map(
        function ($r) {
          return new Resource($r);
        },
      (array) get_field('related_content', $this->p->ID));
    };
  }

  function get_categories_html() {
    $cats = array_map(
      function ($c) {

        return "<span>$c->name</span>";
      },
      $this->categories
    );
    return implode('&nbsp;|&nbsp;', $cats);
  }

  function get_creators_html() {
    $creators = array_map(
      function ($c) {
        $name = htmlspecialchars($c->name);
        return "<span>$name</span>";
      },
      $this->creators
    );
    return implode(',&nbsp;', $creators);
  }
}
