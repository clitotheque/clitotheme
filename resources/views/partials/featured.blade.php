@php
    $c = get_category_by_slug('featured-'.pll_current_language('slug'));
    if(!isset($c)) $c = get_category_by_slug('featured');

    $loop = new WP_Query(array(
        'post_type' => 'res',
        'cat' => $c->term_id,
    ));
@endphp

<div class="black-section p-10">
    <h1 class="mt-4 mb-6">Les incontournables</h1>
    <div class="container flex flex-row flex-wrap items-center justify-center py-4">
        @while ($loop->have_posts()) @php $loop->the_post() @endphp
        @include('partials.post-highlighted')
        @endwhile
    </div>
</div>

@php
  wp_reset_postdata();
@endphp