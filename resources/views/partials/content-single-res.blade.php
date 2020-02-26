@php

$r = new App\Data\Resource(get_post());

@endphp
<article @php post_class() @endphp>
  <header>
    <h1 class="entry-title">{!! get_the_title() !!}</h1>
  </header>
  <div class="entry-content">
    <h2>Creator</h2>
    @foreach ($r->creators as $c)
      {{ $c->p->post_title }}
    @endforeach
    <h2>Description</h2>
    {{ the_content() }}
    <h2>Review</h2>
    {!! $r->review !!}
  </div>
  {{ var_dump(($r->related)())  }};
  {{--
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  --}}
  {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
</article>
