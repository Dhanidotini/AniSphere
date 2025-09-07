<x-filament-panels::page>
    {{-- Page content --}}
    @forelse ($images as $image)
        <div class="grid grid-cols-4">
            <img src="{{ $image->getUrl() }}" alt="">
        </div>
    @empty

    @endforelse
</x-filament-panels::page>
