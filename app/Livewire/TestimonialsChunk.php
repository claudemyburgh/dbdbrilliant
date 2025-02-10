<?php

namespace App\Livewire;

use App\Models\Testimonial;
use Illuminate\View\View;
use Livewire\Component;

class TestimonialsChunk extends Component
{

    public array $ids = [];




    public function render(): View
    {
        return view('livewire.testimonials-chunk', [
            'testimonials' => Testimonial::query()
                ->whereIn('id', $this->ids)
                ->orderByRaw("FIELD(id, ". implode(',', $this->ids) ." )")
                ->get()
        ]);
    }
}
