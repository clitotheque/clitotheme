@php
if (!isset($post_link)) $post_link = false;
if (!isset($more)) $more = false;
//var_dump($r);
@endphp
<header class="post-title @if (!$more) mb-10 @endif">
    <h1 class="entry-title title-{{ $r->type_label }} leading-none">
        @if ($post_link)
        <a
            href="{{ the_permalink() }}"
            title="{{ the_title_attribute() }}">
            {{ the_title() }}
        </a>
        @else
        {{ the_title() }}
        @endif
    </h1>
    <h4 class="leading-none">
      {!! $r->get_creators_html() !!}
    </h4>
    @if ($more && !($r->pub_date == null))
    <h5>{{ pll_( 'Publié' ) }}:&nbsp{{ $r->pub_date }}
    @if (!($r->editor == null))
      {{ pll_( 'par' }}:&nbsp{{ $r->editor }}
    @endif
    </h5>
    @endif
    <h6 class="italic leading-none">
        {!! $r->get_categories_html() !!}
    </h6>
</header>
