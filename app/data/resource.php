<?php
namespace App\Data;

class Resource extends ACFPost
{
  /**
   * @var Creator[] $creators  The creator(s) of the resource
   * @var bool $ignore_month
   * @var bool $ignore_day
   * @var bool $mature          Is content for mature audience only
   * @var bool $free            Is content free
   * @var string $review        Review
   * @var callable $related     Access related resources
   * @var mixed[] $categories   Categorie(s)
   * @var mixed[] $types        Type(s)
   * @var string $type_label    Type identifier string
   */
  public $creators = null;
  public $ignore_month = true;
  public $ignore_day = true;
  public $mature = false;
  public $free = true;
  public $review = '';
  public $related = null;
  public $categories = [];
  public $types = [];
  public $type_label = 'accent';

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

    $this->types = wp_get_post_terms($pid, 'res_types');

    $this->related = function () {
      return array_map(
        function ($r) {
          return new Resource($r);
        },
      (array) get_field('related_content', $this->p->ID));
    };

    $this->type_label = $this->get_type_label();
  }

  function get_categories_html($no_featured = false) {
    $cats = array_map(
      function ($c) use ($no_featured) {
        if($no_featured) {
          $cf = get_category_by_slug('featured');
          if($c->term_id ===  $cf->term_id) return "";
        }
        return "<span>$c->name</span>";
      },
      $this->categories
    );
    $cats2 = array_filter(
      $cats,
      function ($s) {
        return !($s === "");
      }
    );
    return implode('&nbsp;|&nbsp;', $cats2);
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

  private function is_prefix($pref, $str) {
    return substr($str, 0, strlen($pref)) === $pref;
  }

  private function get_type_label() {
    $types = array_map(
      function($t) {
        return $t->slug;
      },
      $this->types
    );

    $res = 'accent';
    foreach($types as $key => $type) {
      if($this->is_prefix('link', $type)) $res = 'accent';
      else if($this->is_prefix('video', $type)) $res = 'video';
      else if($this->is_prefix('movie', $type)) $res = 'video';
      else if($this->is_prefix('yt', $type)) $res = 'video';
      else if($this->is_prefix('book', $type)) $res = 'book';
    }

    return $res;
  }
}
