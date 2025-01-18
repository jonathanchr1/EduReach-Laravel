<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function viewAll()
    {
        $courses = Course::where('teacher_id', Auth::id())->get();
        return view('teacher.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('teacher.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'materials.*.name' => 'nullable|string|max:255',
            'materials.*.link' => 'nullable|url',
        ]);

        $course = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'teacher_id' => Auth::id(),
        ]);

        if ($request->materials) {
            foreach ($request->materials as $material) {
                if ($material['name'] && $material['link']) {
                    $course->materials()->create($material);
                }
            }
        }

        return redirect()->route('teacher.courses.index')->with('success', 'Course created successfully!');
    }

    public function edit(Course $course)
    {
        if ($course->teacher_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('teacher.courses.edit', compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'materials.*.name' => 'nullable|string|max:255',
            'materials.*.link' => 'nullable|url',
        ]);

        if ($course->teacher_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        $course->materials()->delete();
        if ($request->materials) {
            foreach ($request->materials as $material) {
                if ($material['name'] && $material['link']) {
                    $course->materials()->create($material);
                }
            }
        }

        return redirect()->route('teacher.courses.index')->with('success', 'Course updated successfully!');
    }

    public function destroy(Course $course)
    {
        if ($course->teacher_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $course->delete();

        return redirect()->route('teacher.courses.index')->with('success', 'Course deleted successfully!');
    }

}
