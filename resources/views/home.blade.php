@extends('layout.app')

@section('content')

<script src='https://cdn.jsdelivr.net/npm/meilisearch@latest/dist/bundles/meilisearch.umd.js'></script> 
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
            <div class="swiper-slide">
                <img src="https://s.uiinitiative.com/items/fashion-slider/cover.jpg">
            </div>
                            </div>
      </div>


  

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="p-6">

                <form method="POST" action="{{route('user.add')}}">
                    @csrf
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="staticEmail" value="">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" id="staticEmail" value="">
                    </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="inputPassword">
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Sned</button>
                </form>

                <a href="{{route('user.test1')}}" class="btn btn-primary">Test1</a>
            </div>

            <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <div id="app">
                        <test-vue></test-vue>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500 sm:text-left">
            <div class="flex items-center">
                <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                    <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>

                <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                    Shop
                </a>

                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>

                <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                    Sponsor
                </a>
            </div>
        </div>

        <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>

// const client = new MeiliSearch({
//     host: 'http://127.0.0.1:7700',
// });

// const index = client.index('users')
// const input = document.querySelector('#search')

// input.addEventListener('keyup', event => {
//     console.log('ok');
//     index.search(event.target.value)
//     .then(response => {
//         let nodes = response.hits.map(user => {
//             let div = document.createElement('div');
//             div.textContent = user.name;
//             return div;
//         });
//         let results = document.querySelector('#results');
//         results.innerHTML = '';
//         results.append(...nodes);
//     })
// })
</script>
<script>
    var swiper = new Swiper(".mySwiper", {});
  </script>
@endpush