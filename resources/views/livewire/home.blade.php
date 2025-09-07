<div class="bg-[#1d1b26] p-2 text-xs">
    <h1 class="uppercase font-bold p-2">Updatan Terbaru</h1>
    <hr class="rounded-lg text-4xl">
    @foreach ($series as $seri)
        <div class="flex py-1 my-1">
            @if ($media = $seri->getFirstMedia('banners'))
                <div class="w-40 h-20">
                    {{ $media->img()->attributes(['class' => 'w-full h-full object-cover object-center']) }}
                </div>
            @endif
            <div class="flex flex-col gap-1 ml-2 my-1 px-2 py-1 bg-[#282a36] w-full">
                <h4 class="font-bold text-sm">
                    {{ $seri->title }}
                </h4>
                <div class="flex">
                    <x-forkawesome-user width='12' />
                    <div class="mx-1 text-[11px]">
                        Posted by
                        {{ $seri->user->name }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
