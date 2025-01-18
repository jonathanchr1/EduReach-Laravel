<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $threads = Thread::with('user')->latest()->get();
        return view('forum.index', compact('threads'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Thread::create([
            'title' => $request->title,
            'message' => $request->message,
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('forum.index')->with('success', 'Thread created successfully!');
    }

    public function show(Thread $thread)
    {
        $thread->load([
            'user',
            'replies' => function ($query) {
                $query->orderBy('created_at', 'desc');
            },
            'replies.user'
        ]);

        return view('forum.show', compact('thread'));
    }

    public function reply(Request $request, Thread $thread)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $thread->replies()->create([
            'message' => $request->message,
            'user_id' => Auth::id(),
        ]);

        return back()->with('success', 'Reply added successfully!');
    }

    public function deleteReply(Reply $reply)
    {
        if ($reply->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action.');
        }

        $reply->delete();
        return back()->with('success', 'Reply deleted successfully!');
    }
}
