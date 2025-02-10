<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomePageIndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $testimonials =  Testimonial::with('user')->get()->take(12);

//        return $testimonials;

        return view('pages.home', [
            'testimonials' => $testimonials
        ]);
    }
}
