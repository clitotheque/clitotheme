@php

$r = new App\Data\Resource(get_post());
global $more;
$more = 0;

@endphp
<div class="container flex
    @if ($left)
      flex-row
    @else
      flex-row-reverse
    @endif
    flex-wrap
    my-16
    p-0
    bg-white">
  <div class="flex-shrink-0 flex-grow w-84 h-96 overflow-hidden">
    @include('partials.post-image', ['cover' => true])
  </div>
  <div class="w-84 flex-shrink-0 flex-grow-100 p-6">
    @include('partials.post-title', ['post_link' => true])
    <p>{{ the_excerpt() }}</p>
  </div>
</div>