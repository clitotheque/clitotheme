@extends('layouts.search')

@section('content')
  @while(have_posts()) @php the_post() @endphp
      @include('partials.content-page')
      <div id="results"></div>
  @endwhile
@endsection
