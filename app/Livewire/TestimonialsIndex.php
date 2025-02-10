<?php

namespace App\Livewire;

use App\Models\Testimonial;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Component;

class TestimonialsIndex extends Component
{
    public array $chunks;

    public int $page = 1;


    public function mount(): void
    {
        $this->chunks= Testimonial::with('user')
            ->orderBy('id', 'desc')
            ->pluck('id')->chunk(24)->toArray();
    }

    public function hasMorePages(): bool
    {
        return $this->page < count($this->chunks);
    }

    public function loadMore(): void
    {
        if (!$this->hasMorePages()) {
            return;
        }
        $this->page++;
    }


    public function render(): View
    {
        return view('livewire.testimonials-index');
    }
}
