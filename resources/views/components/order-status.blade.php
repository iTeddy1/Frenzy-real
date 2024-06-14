@props(["status" => ""])
@switch($status)
    @case("pending")
        <div class="flex justify-center rounded text-white bg-secondary">{{ $status }}</div>
    @break

    @case("processing")
        <div class="flex justify-center rounded text-white bg-warning">{{ $status }}</div>
    @break

    @case("shipped")
        <div class="flex justify-center rounded text-white bg-primary-dark">{{ $status }}</div>
    @break

    @case("delivered")
        <div class="flex justify-center rounded text-white bg-primary">{{ $status }}</div>
    @break

    @case("cancelled")
        <div class="flex justify-center rounded text-white bg-error">{{ $status }}</div>
    @break

    @default
@endswitch
