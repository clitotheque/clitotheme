<div class="relative justify-center  w-screen h-screen z-30 bg-topo">
  {{-- Background --}}
  <div class="absolute full bg-tr"></div>
  <div class="absolute full lg:w-2/3  left-0">
    <div class="absolute full bg-accent opacity-90"></div>
    <div class="flex flex-col items-center justify-evenly full z-40">
      <div class="w-full md:w-4/5 xl:w-3/2 z-40"><img width="100%" src="@asset('images/temp_logo.svg')" /></div>
      <div class="z-40 overflow-hidden w-4/5 lg:w-2/3 rounded">
        <div>
          <input type="text" placeholder="Rechercher un contenu..." class="main-search w-full" />
        </div>
        <div class="flex flex-row flex-wrap z-40">
          <input type="button" value="Proposer un contenu" class="btn-home" />
          <input type="button" value="Découvrir les contenus" class="btn-home" />
        </div>
      </div>
  </div>
  </div>
</div>
