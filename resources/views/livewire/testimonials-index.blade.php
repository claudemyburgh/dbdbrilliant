<div>
    <div class="w-full space-y-4 ">
        @for($chunk = 0; $chunk < $page; $chunk++)
            <livewire:testimonials-chunk :ids="$chunks[$chunk]" :key="$chunk"/>
        @endfor
    </div>
    @if($this->hasMorePages())
        <div x-intersect:enter="$wire.loadMore" class=" text-center flex justify-center w-full py-6">
            <x-heroicon-o-arrow-path class="size-6 animate-spin text-gray-300"/>
        </div>
    @endif

</div>
