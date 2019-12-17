<div class="black-section p-10">
    <h1 class="mt-4 mb-6">Les incontournables</h1>
    <div class="container flex flex-row flex-wrap items-center justify-center py-4">
        
    @component('components.highlighted-post',[
    'img' => 'images/temp/banane1.jpg'
    ])
        Totoro1
    @endcomponent

    @component('components.highlighted-post',[
        'img' => 'images/temp/banane2.webp'
    ])
        Totoro2
    @endcomponent

    @component('components.highlighted-post',[
    'img' => 'images/temp/banane3.jpg'
    ])
        Totoro3
    @endcomponent
    </div>
</div>