<x-app-layout>

    <x-hero/>
    <x-counter-stats/>
    <div class="grid grid-cols-3 gap-4 wrapper">
        @each('components.testimonials.card', $testimonials, 'testimonial')
    </div>


    <div class="wrapper my-12">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus amet beatae, culpa cupiditate debitis delectus dolore, dolorem dolores ducimus enim facilis ipsam necessitatibus non reiciendis reprehenderit, rerum sit temporibus!
    </div>
</x-app-layout>
