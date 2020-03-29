@php

$r = new App\Data\Resource(get_post());

@endphp
<div class="featured-box"
  style="background: url('{!! get_the_post_thumbnail_url(null, 'medium_large') !!}'); background-size: cover;">
<div class="featured-meta">
  <div class="meta-head">
    <div class="m-auto">
      <h3 class="leading-none"><a
        href="{!! the_permalink() !!}"
        title="{{ the_title_attribute() }}"
        class="no_link_effect">
          {{ get_the_title() }}
        </a>
      </h3>
      <h6 class="italic leading-none">{!! $r->get_categories_html(true) !!}</h6>
    </div>
  </div>
  <div class="meta-description">
      <p>{!! get_the_excerpt()!!}</p>
  </div>
</div>
</div>