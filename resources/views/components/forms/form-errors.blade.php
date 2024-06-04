@props(['name'])

@error($name)
    <p class="text-xs text-error font-semibold mt-1">{{ $message }}</p>
@enderror