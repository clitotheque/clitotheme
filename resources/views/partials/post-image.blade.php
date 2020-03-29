@php
 if(!isset($cover)) $cover = false;
@endphp

<div class="bg-{{ $r->type_label }} w-full
    @if ($cover)
        h-full
    @endif
    p-5 overflow-hidden">
    <div class="full border-solid border-white border-4">
    @if ($cover)
        @php $url = get_the_post_thumbnail_url($r->p->ID, 'medium_large') @endphp
        <div
            class="full"
            style="background: url('{!! $url !!}') center/cover no-repeat;"
        >&nbsp;</div>
    @else
        {!! get_the_post_thumbnail($r->p->ID, 'medium_large') !!}
    @endif
    </div>
</div>
