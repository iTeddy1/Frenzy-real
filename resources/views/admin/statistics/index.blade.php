@extends('layouts.admin')

@section('content')
    <div class="w-full grid gap-6 md:grid-cols-3 mb-8">
        <div class="p-6 border rounded bg-white">
            <div>
                <span class="font-medium">Total Revenue</span>
            </div>
            <div class="text-3xl font-semibold">{{ number_format($totalRevenue, 0, ',', '.') }}₫ </div>
        </div>

        <div class="p-6 border rounded bg-white">
            <div>
                <span class="font-medium">Sale quantity</span>
            </div>
            <div class="text-3xl font-semibold">{{ number_format($totalQuantity, 0, ',', '.') }}</div>
        </div>
    </div>

    <!-- Filter Form -->
    <form id="filterForm" method="GET" action="{{ route('admin.statistics.index') }}" class="mb-6">
        <div class="grid grid-cols-4 gap-4">
            <!-- Search -->
            <input
                type="text"
                name="search"
                value="{{ request('search') }}"
                placeholder="Search products..."
                class="border border-gray-300 rounded-lg p-2"
            />
                    <!-- Sort -->
            <select name="sort_by" class="border rounded p-2">
                <option value="name" {{ request('sort_by') === 'name' ? 'selected' : '' }}>Tên</option>
                <option value="total_quantity" {{ request('sort_by') === 'total_quantity' ? 'selected' : '' }}>Số lượng bán</option>
                <option value="total_revenue" {{ request('sort_by') === 'total_revenue' ? 'selected' : '' }}>Doanh thu</option>
            </select>

            <!-- Order -->
            <select name="sort_order" class="border rounded p-2">
                <option value="asc" {{ request('sort_order') === 'asc' ? 'selected' : '' }}>Tăng dần</option>
                <option value="desc" {{ request('sort_order') === 'desc' ? 'selected' : '' }}>Giảm dần</option>
            </select>

            <!-- Start Date -->
            <input
                type="date"
                name="start_date"
                value="{{ request('start_date') }}"
                class="border border-gray-300 rounded-lg p-2"
            />

            <!-- End Date -->
            <input
                type="date"
                name="end_date"
                value="{{ request('end_date') }}"
                class="border border-gray-300 rounded-lg p-2"
            />
        </div>
        <button
            type="submit"
            class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-lg"
        >
            Filter
        </button>
    </form>

    <!-- Table -->
    <table class="w-full border-collapse border border-gray-200">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">Id</th>
                <th class="border border-gray-300 p-2">Name</th>
                <th class="border border-gray-300 p-2">Total Quantity</th>
                <th class="border border-gray-300 p-2">Total Revenue</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <td class="border border-gray-300 p-2">{{ $product->id }}</td>
                    <td class="border border-gray-300 p-2">{{ $product->name }}</td>
                    <td class="border border-gray-300 p-2">{{ $product->total_quantity ?? 0 }}</td>
                    <td class="border border-gray-300 p-2">{{ $product->total_revenue ?? 0 }}₫</td>

                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center text-gray-500 p-4">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $products->appends(request()->query())->links() }}
    </div>
</div>
@endsection

@section('scripts')
document.getElementById('filterForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = e.target;
    const formData = new FormData(form);
    const queryString = new URLSearchParams(formData).toString();

    fetch(`${form.action}?${queryString}`)
        .then(response => response.text())
        .then(html => {
            document.body.innerHTML = html; // Cập nhật nội dung trang
        })
        .catch(error => console.error('Error:', error));
});

@endsection
