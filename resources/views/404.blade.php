@extends('layouts.page')

@section('main')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      {{ pll__('Sorry, but the page you were trying to view does not exist.') }}
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
