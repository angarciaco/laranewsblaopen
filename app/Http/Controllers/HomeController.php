<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    /**
     * Show the upcoming news site landing page.
     */
    public function __invoke(): View
    {
        return view('home', [
            'launchAt' => Carbon::parse(config('site.launch_at'))->toIso8601String(),
        ]);
    }
}
