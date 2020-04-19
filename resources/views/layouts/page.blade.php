@extends('layouts.app')

@section('main')
<div class="wrap container p-0" role="document">
  <div class="content bg-white p-8 pt-1 md:px-48">
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