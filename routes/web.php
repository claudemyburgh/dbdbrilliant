<?php

    use App\Http\Controllers\Pages\HomePageIndexController;
    use App\Http\Controllers\TestimonialsIndexController;
    use Illuminate\Support\Facades\Route;

Route::get('/', HomePageIndexController::class)->name("pages.home");
Route::get('/', TestimonialsIndexController::class)->name("testimonials.index");
