@php

$r = new App\Data\Resource(get_post());
$caption = get_the_post_thumbnail_caption();

@endphp
<article @php post_class('flex flex-row flex-wrap justify-center bg-white') @endphp>
  <div class="left-column w-1/4 min p-5 flex-grow sm:flex-grow-0 text-center">
    @include('partials.post-image')
    @if (!($caption == null))
    <div class="copyright italic text-gray-400">{{ $caption }}</div>
    @endif
    @if (!empty($r->link))
      @if($r->mature)
      <a
        class="no_link_effect"
        data-message="Cette resource est réservée à un public majeur. En cliquant sur Ok je confirme être agé de 18 ans ou plus."
        href="{{ $r->link }}"
        target="_blank">
      <div class="inline-block mt-4 p-4 mx-auto rounded-lg border-{{ $r->type_label }} border-4 hover:bg-{{ $r->type_label }} text-center uppercase font-bold text-lg transition-colors duration-150">
        <span>🔞&nbsp;Accéder à la ressource&nbsp;🔗</span>
      </div>
      </a>
      @else
      <a class="no_link_effect" href="{{ $r->link }}" target="_blank">
      <div class="inline-block mt-4 p-4 mx-auto rounded-lg border-{{ $r->type_label }} border-4 hover:bg-{{ $r->type_label }} text-center uppercase font-bold text-lg transition-colors duration-150">
        <span>Accéder à la ressource&nbsp;🔗</span>
      </div>
      </a>
      @endif
    @endif
  </div>
  <div class="right-column w-2/4 p-5 flex-grow sm:flex-grow-0">
    <div class="entry-content">
      @include('partials.post-title', ['more' => true])
      <div class="with-dotted-links">
      {{ the_content() }}
      <div class="italic mt-4" style="padding-left: 10%;">{!! html_entity_decode($r->review) !!}</div>
      @if (!empty($r->get_yt_id()))
      <div class="relative overflow-hidden h-0 my-4" style="padding-bottom:56.25%">
      <iframe class="w-full h-full absolute left-0 top-0" id="ytplayer" type="text/html" width="640" height="360"
  src="https://www.youtube.com/embed/{{ $r->get_yt_id() }}?autoplay=0&modestbranding=1&rel=0&showinfo=0&origin={{ home_url() }}"
  frameborder="0"></iframe>
      </div>
      </div>
      @endif
    </div>
  </div>
  {{--
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  --}}
  {{-- @php comments_template('/partials/comments.blade.php') @endphp --}}
</article>
