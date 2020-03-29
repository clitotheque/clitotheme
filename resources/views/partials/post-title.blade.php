<header class="post-title mb-8">
    <h2 class="leading-none">{!! $r->get_creators_html() !!}</h2>
    <h1 class="entry-title title-{{ $r->type_label }} leading-none">{!! get_the_title() !!}</h1>
    <h6 class="italic leading-none">
        {!! $r->get_categories_html() !!}
    </h6>
</header>
