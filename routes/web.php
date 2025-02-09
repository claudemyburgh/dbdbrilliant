<?php

    use App\Http\Controllers\Pages\HomePageIndexController;
    use Illuminate\Support\Facades\Route;

Route::get('/', HomePageIndexController::class)->name("pages.home");
