@php
if (!isset($post_link)) $post_link = false;
@endphp
<header class="post-title mb-8">
    <h2 class="leading-none">{!! $r->get_creators_html() !!}</h2>
    <h1 class="entry-title title-{{ $r->type_label }} leading-none">
        @if ($post_link)
        <a
            href="{!! the_permalink() !!}"
            title="{{ the_title_attribute() }}">
            {{ get_the_title() }}
        </a>
        @else
        {{ get_the_title() }}
        @endif
    </h1>
    <h6 class="italic leading-none">
        {!! $r->get_categories_html() !!}
    </h6>
</header>
