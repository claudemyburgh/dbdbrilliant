@props(['rating'])

<div class="flex items-center ">
    @for ($i = 1; $i <= 5; $i++)
        @if($i <= $rating)
            <x-heroicon-s-star class="size-5 text-yellow-500"/>
        @else
            <x-heroicon-o-star class="size-5 text-yellow-500"/>
        @endif
    @endfor



</div>
