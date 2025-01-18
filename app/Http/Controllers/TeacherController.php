<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        return view('teacher.dashboard', compact('user'));
    }
}
