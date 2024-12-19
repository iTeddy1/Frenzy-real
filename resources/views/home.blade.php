@extends('layouts.app')

@section('content')
    <div class="mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8 ">
        @include('components/carousel')
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800 mt-4">
            Shop</div>
        {{ Breadcrumbs::render("home") }}

        <div class="mt-10 flex">
            <div>
                <form class="mx-auto max-w-md" action="#" method="GET">
                    <label class="sr-only mb-2 bg-white text-sm font-medium text-text-dark"
                        for="product-search">Search</label>
                    <div class="relative">
                        <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                            <svg class="h-4 w-4 text-text-normal" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input
                        name="query"
                        type="search"
                        class="block bg-white w-full rounded-lg border border-gray-300 p-4 ps-10 text-sm text-text-normal focus:border-divider focus:ring-primary"
                        id="product-search"
                        placeholder="Search..."
                        required />
                    </div>
                </form>
            </div>
            <div class="ml-auto inline-flex items-center justify-between">
                <div class="flex break-words text-center text-lg font-bold leading-6 ">
                    Sort by name:
                    <a class="btn btn-secondary"
                        href="{{ route("home", ["sort_field" => "name", "sort_direction" => $sortField == "name" && $sortDirection == "asc" ? "desc" : "asc"]) }}">
                        {!! $sortDirection == "asc"
                            ? '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-up" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 15l6 -6l6 6" />
                                </svg>'
                            : '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-down" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M6 9l6 6l6 -6" />
                                </svg>'
                        !!}

                    </a>

                    <i class="bx bx-chevron-down ml-1"></i>
                </div>
            </div>
        </div>

        <!--Products-->
        {{-- <div class="mt-16 flex items-center space-x-5">
            <div class="ml h-14 w-6 bg-[#007B55]"></div>
            <div class="font-public-sans break-words text-2xl font-semibold text-green-600">
                Our Products
            </div>
        </div>

        <div class="mt-none explore font-public-sans leading-12 mb-10 text-4xl font-bold tracking-wide text-black">
            Explore Our Products
        </div> --}}
        <section>
            <div id="search-result" class="mx-auto mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
                @foreach ($products as $product)
                    <x-product-card
                    :name="$product['name']"
                    :tag="$product['tag']"
                    :regularprice="$product['regular_price']"
                    :saleprice="$product['sale_price']"
                    :image="$product->assets->first()->path"
                    :hoverimage="$product->assets->skip(1)->first()->path"
                    :urlid="$product['id']"
                    :colorway="$product['colorway']"
                    />
                @endforeach
            </div>
            <div>{{ $products->links() }}</div>
        </section>
    </div>
@endsection
