<header class="banner fixed w-screen h-20 z-10 p-0 bg-white">
    <a class="brand" href="{{ home_url('/') }}">
      <img class="inline-block h-20" src="@asset('images/temp_logo.svg')" />
      {{-- get_bloginfo('name', 'display') --}}
    </a>
    <nav class="nav-primary inline-block">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
</header>
