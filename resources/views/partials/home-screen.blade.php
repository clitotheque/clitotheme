<div class="relative justify-center w-full h-screen z-45 bg-topo">
  {{-- Background --}}
  <div class="absolute full bg-tr"></div>
  <div class="absolute full lg:w-2/3  left-0">
    <div class="absolute full bg-accent opacity-90"></div>
    <div class="flex flex-col items-center justify-center full z-40">
      <div class="w-full mb-16 z-40">
        <img width="100%" src="@asset('images/temp_logo.svg')" />
      </div>
      <div class="z-40 w-4/5 lg:w-2/3">
        {{-- <div>
          <form id="main-search" method="GET" action="{{ \App\Tools::poly_get_page_link(4) }}">
          <input type="text"
          name="_sf_s"
          placeholder="Rechercher..." class="main-search w-full rounded-lg" />
          <input type="submit" class="hidden invisible"/>
        </form>
        </div> --}}
        <div class="flex flex-row flex-wrap justify-around z-40">
          <a href="{{ App\Tools::poly_get_page_link("search") }}">
            <input type="button" value="Découvrir les contenus" class="btn-home flex-grow m-2 p-6" /></a>
            {{--  {{ App\Tools::poly_get_page_link("proposer-une-ressource") }} --}}
          <a href="https://framaforms.org/clitotheque-proposer-une-ressource-1588954160" target="_blank"><input type="button" value="Proposer un contenu" class="btn-home flex-grow m-2 p-6" /></a>
        </div>
      </div>
  </div>
  </div>
  <span class="absolute w-full bottom-0 mx-auto text-center text-6xl ">
    <a href="#menu" class=" hover:text-white">⌵</a>
  </span>
</div>
