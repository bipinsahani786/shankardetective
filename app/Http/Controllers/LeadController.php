<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // Honeypot check: Bots fill this hidden input
        if ($request->filled('_hp')) {
            return back()->with('success', 'Your inquiry has been received.');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'phone' => 'required|string|min:10|max:20',
            'email' => 'nullable|email|max:100',
            'city' => 'required|string|max:100',
            'service_requested' => 'required|string|max:150',
            'preferred_contact_method' => 'nullable|string|in:Phone,WhatsApp,Email',
            'urgency' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:2000',
        ]);

        $validated['ip_address'] = $request->ip();
        $validated['status'] = 'new';

        Lead::create($validated);

        return back()->with('success', 'Your consultation request has been submitted securely. A senior investigator will contact you discreetly within 2 hours.');
    }
}
