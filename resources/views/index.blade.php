@extends('layouts.home')

@section('before')
  @include('partials.home-screen')
  @include('partials.featured')
@endsection

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ __('Sorry, no results were found.', 'sage') }}
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while (have_posts()) @php the_post() @endphp
    @php
    if (isset($left) && $left) $left = false;
    else $left = true;
    @endphp
    @include('partials.content-list-'.get_post_type())
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
