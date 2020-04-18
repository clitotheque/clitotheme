<!doctype html>
<html class="text-xs md:text-sm xl:text-base" {!! get_language_attributes() !!}>

  @include('partials.head')

  <body @php body_class([
    'bg-dotted',
    'bg-fixed',
    'w-full']) @endphp>

    @yield('before')

    @php do_action('get_header') @endphp
    @include('partials.header')

    @yield('main')

    @php do_action('get_footer') @endphp
    @include('partials.footer')

    <div class="h-40 w-full overflow-hidden bg-accent"
    style="background: url(@asset('images/temp/footer.jpg')); background-size:cover; background-position: center">
    </div>

    {{-- Populate auto-complete with categories, tags, etc --}}
    <script type="text/javascript">
      var terms_res_types = [
        @php
        $categories = get_terms(array(
            'taxonomy' => 'res_types',
            'hide_empty' => false,
        ));

        foreach($categories as $category) {
          echo "'" .$category->name . "'," ;
        }
        @endphp
      ];
    </script>

    @php wp_footer() @endphp
  </body>
</html>
