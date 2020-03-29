@extends('layouts.app')

@section('before')
  @yield('before-deep')
@endsection


@section('main')
@yield('featured')
<div class="wrap container" role="document">
  <div class="content p-4">
    <main class="main">
      @yield('content')
    </main>
    @if (App\display_sidebar())
    <aside class="sidebar">
      @include('partials.sidebar')
    </aside>
    @endif
  </div>
</div>
@endsection