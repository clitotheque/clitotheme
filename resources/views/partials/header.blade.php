

<div class="inline-block md:hidden fixed w-12 h-12 top-0 right-0 m-4 z-10
 bg-white rounded-full opacity-90
">
</div>
<div class="fixed top-0 right-0 z-50">
{{-- <img width="30px" class="hidden md:inline-block m-5" src="@asset('images/icons/facebook.svg')" /> --}}
<img id="menu-switch" width="30px" class="inline-block md:hidden m-5 z-50" src="@asset('images/icons/menu.svg')" />
</div>

<header class="banner-wrapper">
  <div id="menu" class="banner">
    <a class="brand" href="{{ pll_home_url() }}">
      <img class="inline-block h-20"
      src="@asset('images/temp_logo.svg')" />
      {{-- get_bloginfo('name', 'display') --}}
    </a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>