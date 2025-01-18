<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LearnerCourseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $courses = Course::with('teacher')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', "%{$search}%")
                            ->orWhereHas('teacher', function ($query) use ($search) {
                                $query->where('name', 'like', "%{$search}%");
                            });
            })
            ->paginate(6);

        return view('learner.courses.index', compact('courses'));
    }

    public function show(Course $course)
    {
        $course->load('materials', 'teacher');
        return view('learner.courses.show', compact('course'));
    }
}
