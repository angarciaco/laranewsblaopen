<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscriber;
use Illuminate\Http\RedirectResponse;

class SubscriberController extends Controller
{
    /**
     * Register an email address for the launch announcement.
     */
    public function store(SubscribeRequest $request): RedirectResponse
    {
        Subscriber::firstOrCreate([
            'email' => $request->validated('email'),
        ]);

        return back()
            ->withFragment('suscribirse')
            ->with('status', '¡Listo! Te avisaremos en cuanto estemos en vivo.');
    }
}
