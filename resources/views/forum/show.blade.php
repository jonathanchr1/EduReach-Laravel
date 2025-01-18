@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px; padding-bottom: 90px">
    <div class="row">
        <div class="col-12">
            <h1>{{ $thread->title }}</h1>
            <p>@lang('edu.lbl-message') : </p>
            <p>{{ $thread->message }}</p>
            <p class="text-muted">@lang('edu.lbl-by') {{ $thread->user->name }} ({{ $thread->user->role }})</p>

            <h3>@lang('edu.lbl-replies') :</h3>
            @foreach($thread->replies as $reply)
                <div class="card mb-3">
                    <div class="card-body">
                        <p>{{ $reply->message }}</p>
                        <p class="text-muted">@lang('edu.lbl-by') {{ $reply->user->name }} ({{ $reply->user->role }}) - {{ $reply->created_at->format('d M Y - H:i') }}</p>
                        @if(Auth::id() === $reply->user_id)
                            <form action="{{ route('forum.deleteReply', $reply->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">@lang('edu.lbl-delete')</button>
                            </form>
                        @endif
                    </div>
                </div>
            @endforeach

            <form action="{{ route('forum.reply', $thread->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="message">@lang('edu.add-reply')</label>
                    <textarea name="message" id="message" class="form-control" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary mt-2">@lang('edu.btn-reply')</button>
            </form>
        </div>
    </div>
</div>

@endsection