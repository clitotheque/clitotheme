<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class(['bg-dotted','bg-fixed']) @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')
    @yield('before')
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
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
    <div class="h-40 w-full overflow-hidden bg-accent"
    style="background: url(@asset('images/temp/footer.jpg')); background-size:cover; background-position: center">
    </div>
  </body>
</html>
