<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class LearnerController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        return view('learner.dashboard', compact('user'));
    }
}
