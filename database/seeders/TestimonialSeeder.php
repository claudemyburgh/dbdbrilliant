<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Database\Factories\TestimonialFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::factory()
            ->state(new Sequence(fn ($sequence) => ['created_at', now()->addDays($sequence->index)]))
            ->times(100)
            ->create();
    }
}
