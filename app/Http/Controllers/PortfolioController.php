<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PortfolioController extends Controller
{
    public function index()
    {
        $resumeAvailable = file_exists(public_path('resume/Dikshita_Resume.pdf'));

        return view('welcome', compact('resumeAvailable'));
    }

    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        return redirect()->route('home')
            ->with('success', 'Thank you for your message! I will get back to you soon.');
    }

    public function downloadResume()
    {
        $path = public_path('resume/Dikshita_Resume.pdf');

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->download($path, 'Dikshita_Resume.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }
}
