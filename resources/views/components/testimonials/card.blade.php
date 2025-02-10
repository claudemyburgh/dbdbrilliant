@props([
    'testimonial'
])

<div class="shadow-sm border border-gray-200 shadow-black/20 space-y-2 rounded-lg p-4 flex flex-col">
    <div class="font-semibold text-lg">
        #{{$testimonial->id}} .
        {{$testimonial->user->name}}
    </div>
    <x-stars :rating="$testimonial->rating"/>
    <div>
        {{ $testimonial->message }}
    </div>
</div>
