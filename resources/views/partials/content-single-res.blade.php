@php

$r = new App\Data\Resource(get_post());

@endphp
<article @php post_class('flex flex-row flex-wrap justify-center bg-white') @endphp>
  <div class="left-column w-1/4 min p-5 flex-grow sm:flex-grow-0 text-center">
    @include('partials.post-image')
    @if (!is_null($r->link))
    <a class="no_link_effect" href="{{ $r->link }}" target="_blank">
    <div class="inline-block mt-4 p-4 mx-auto rounded-lg border-{{ $r->type_label }} border-4 hover:bg-{{ $r->type_label }} text-center uppercase font-bold text-lg transition-colors duration-150">
      <span>Accéder à la resource&nbsp;🔗</span>
    </div>
    </a>
    @endif
  </div>
  <div class="right-column w-2/4 p-5 flex-grow sm:flex-grow-0">
    <div class="entry-content">
      @include('partials.post-title')
      <h4 class="underline">Description</h4>
      {{ the_content() }}
      <h4 class="underline">Notre avis</h4>
      <p>{!! $r->review !!}</p>
    </div>
  </div>
  {{--
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  --}}
  {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
</article>
