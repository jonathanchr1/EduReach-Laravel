@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-top: 30px; margin-bottom: 30px">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/forum-banner.jpg')}}" style="display: block; width: 95%; margin-left: auto; margin-right: auto; border-radius: 25px; border: solid black">
        </div>
        <div class="col-12">
            <div class="container" style="margin-top: 10px; margin-left: 15px; margin-right: 15px" >
                <h1>@lang('edu.lbl-ft')</h1>
                <a href="{{ route('forum.create') }}" class="btn btn-primary mb-3">@lang('edu.btn-cthread')</a>
            </div>
        </div>
    </div>

    <div class="row" style="margin-right: 25px; margin-left: 25px">
        @foreach($threads as $thread)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $thread->title }}</h5>
                <p class="card-text">{{ $thread->message }}</p>
                <p class="text-muted">@lang('edu.lbl-by') {{ $thread->user->name }} ({{ $thread->user->role }}) - {{ $thread->created_at->format('d M Y - H:i') }}</p>
                <a href="{{ route('forum.show', $thread->id) }}" class="btn btn-primary">@lang('edu.view-thread')</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection