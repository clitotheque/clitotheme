@php

$r = new App\Data\Resource(get_post());

@endphp
<div class="block featured-box"
  style="background: url('{!! get_the_post_thumbnail_url(null, 'medium_large') !!}'); background-size: cover;">
  <div class="featured-meta">
    <div class="meta-head">
      <div class="m-auto">
        <h3 class="leading-none">
            {!! \App\Tools::clean_cut(get_the_title(), 50) !!}
        </h3>
        {{-- <h6 class="italic leading-none">{!! $r->get_categories_html(true) !!}</h6> --}}
      </div>
    </div>
    {{--
      <div class="meta-description">
        <p>{{ the_excerpt() }}</p>
      </div>
    --}}
  </div>
  <a
  href="{!! the_permalink() !!}"
  title="{{ the_title_attribute() }}"
  class="absolute top-0 left-0 h-full w-full no_link_effect">&nbsp;</a>
</div>