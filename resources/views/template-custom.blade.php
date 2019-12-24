{{--
  Template Name: Custom Template
--}}

@extends('layouts.page')

@section('main')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile
@endsection
