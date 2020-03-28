@php

$r = new App\Data\Resource(get_post());

@endphp
<article @php post_class('flex flex-row flex-wrap justify-center bg-white') @endphp>
  <div class="left-column w-1/4 min p-5">
    <div class="bg-accent w-full p-5 overflow-hidden">
    {!! get_the_post_thumbnail(null, 'medium_large') !!}
    </div>
  </div>
  <div class="right-column w-2/4 p-5">
    <header class="post-title mb-8">
      <h1 class="entry-title">
        {!! $r->get_creators_html() !!}:&nbsp;{!! get_the_title() !!}</h1>
      <h6 class="-mt-4 italic">
        {!! $r->get_categories_html() !!}
      </h6>
    </header>
    <div class="entry-content">
      <h4 class="underline">Description</h4>
      {{ the_content() }}
      <h4 class="underline">Our opinion</h4>
      <p>{!! $r->review !!}</p>
    </div>
  </div>
  <!-- {{ var_dump(($r->related)())  }};
  {{--
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  --}}
  {{-- @php comments_template('/partials/comments.blade.php') @endphp --}} -->
</article>