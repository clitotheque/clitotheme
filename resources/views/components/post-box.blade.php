@php
 if(!isset($left)) $left = true;
@endphp

<div class="container flex 
    @if ($left)
      flex-row
    @else 
      flex-row-reverse
    @endif
    my-16
    p-0
    bg-white">
  <div 
    class="flex-shrink-0 flex-grow-0 w-84 h-96 border-solid border-14 border-content_1"
    style="background: url(@asset('images/temp/banane1.jpg')); background-size: cover;"
    >
  </div>
  <div class="flex-shrink flex-grow p-6">
    <h2>Titre</h2>
    <h3>Sous-titre | XXX | XXX</h3>
    <p>{{ $slot }}</p>
  </div>
</div>