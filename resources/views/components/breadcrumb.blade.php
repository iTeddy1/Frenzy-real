{{-- resources/views/partials/breadcrumbs.blade.php --}}
<nav class="flex mr-auto" aria-label="Breadcrumb">
@unless ($breadcrumbs->isEmpty())
    <ol class="breadcrumb inline-flex items-center space-x-1 rtl:space-x-reverse">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!is_null($breadcrumb->url) && !$loop->last)
            <li class="breadcrumb-item ml-0">
                    <div class="flex items-center">
                      <a class="text-sm font-bold text-gray-700 hover:text-active"
                      href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                      <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true"
                          xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="m1 9 4-4-4-4" />
                      </svg>
                    </div>
                </li>
            @else
                <li class="breadcrumb-item text-sm active">{{ $breadcrumb->title }}</li>
            @endif
        @endforeach
    </ol>
@endunless
</nav>