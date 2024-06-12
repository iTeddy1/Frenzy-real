@extends("layouts.app")

@section("content")
<div class="mx-auto w-full max-w-screen-2xl px-4 md:px-6 2xl:px-8">
    <div>
        <div class="self-stretch text-2xl font-bold leading-normal tracking-wide text-gray-800">
            Shop</div>
        {{ Breadcrumbs::render("home") }}
    </div>

    <div class="mt-10 flex">
        <div>
            <form class="mx-auto max-w-md" action='/' method="GET">
                <label class="sr-only mb-2 text-sm font-medium text-text-dark "
                    for="default-search">Search</label>
                <div class="relative">
                    <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3">
                        <svg class="h-4 w-4 text-text-normal" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input
                        class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-4 ps-10 text-sm text-text-normal focus:border-divider focus:ring-primary"
                        id="default-search" name="query" type="search" placeholder="Search..." required />

                </div>
            </form>
        </div>
        <div class="ml-auto inline-flex items-center justify-between">
            <div class="flex font-public break-words text-center text-lg font-bold leading-6 ">
                Sort by:
                <a class="btn btn-secondary"
                    href="{{ route("home") }}">
                    {!! 1 == "1"
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
    <div class="container">
        <h1>Your Orders</h1>
        @if($orders->isEmpty())
            <p>You have no orders.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at->format('d-m-Y') }}</td>
                            <td>{{ $order->status }}</td>
                            <td>${{ $order->total }}</td>
                            <td>
                                <a href="{{ route('user.orders.show', $order->id) }}" class="btn btn-primary">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection