<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\LearnerCourseController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('homeER');
})->name('homeER');

Route::get('/about', function () {
    return view('aboutER');
})->name('aboutER');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/articles', [ArticleController::class, 'viewAllArc'])->name('view.articles');
Route::get('/articles/{id}', [ArticleController::class, 'showDetails'])->name('view.articles.detail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'CheckRole:teacher'])->group(function () {
    Route::get('/teacher-dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
    Route::get('/teacher-home', function () {
        return view('teacher.home');
    })->name('tchomeER');
    Route::get('/teacher-about', function () {
        return view('teacher.about');
    })->name('tcaboutER');
});

Route::middleware(['auth', 'CheckRole:teacher'])->prefix('courses')->name('teacher.courses.')->group(function () {
    Route::get('/index', [CourseController::class, 'viewAll'])->name('index');
    Route::get('/create', [CourseController::class, 'create'])->name('create');
    Route::post('/store', [CourseController::class, 'store'])->name('store');
    Route::get('/{course}/edit', [CourseController::class, 'edit'])->name('edit');
    Route::put('/{course}/update', [CourseController::class, 'update'])->name('update');
    Route::delete('/{course}/delete', [CourseController::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'CheckRole:learner'])->group(function () {
    Route::get('/learner-dashboard', [LearnerController::class, 'dashboard'])->name('learner.dashboard');
    Route::get('/learner-home', function () {
        return view('learner.home');
    })->name('lnhomeER');
    Route::get('/learner-about', function () {
        return view('learner.about');
    })->name('lnaboutER');
});

Route::middleware(['auth', 'CheckRole:learner'])->prefix('courses')->name('learner.courses.')->group(function () {
    Route::get('/', [LearnerCourseController::class, 'index'])->name('index');
    Route::get('/{course}', [LearnerCourseController::class, 'show'])->name('show');
});

Route::middleware(['auth'])->prefix('forum')->name('forum.')->group(function () {
    Route::get('/', [ForumController::class, 'index'])->name('index');
    Route::get('/create', [ForumController::class, 'create'])->name('create');
    Route::post('/store', [ForumController::class, 'store'])->name('store');
    Route::get('/{thread}', [ForumController::class, 'show'])->name('show');
    Route::post('/{thread}/reply', [ForumController::class, 'reply'])->name('reply');
    Route::delete('/{reply}/delete', [ForumController::class, 'deleteReply'])->name('deleteReply');
});

Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id', 'de'])) {
        session(['locale' => $locale]);
        app()->setLocale($locale);
    }
    return redirect()->back();
})->name('change.language');

Route::get('/donate', [DonationController::class, 'index'])->name('donate');
Route::post('/donate', [DonationController::class, 'store']);
Route::get('/payment/finish', [DonationController::class, 'finish']);