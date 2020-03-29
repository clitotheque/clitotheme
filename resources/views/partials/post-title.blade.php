<header class="post-title mb-8">
    <h2>{!! $r->get_creators_html() !!}</h2>
    <h1 class="entry-title title-{{ $r->type_label }} -mt-6">{!! get_the_title() !!}</h1>
    <h6 class="-mt-4 italic">
        {!! $r->get_categories_html() !!}
    </h6>
</header>
