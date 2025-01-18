@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-bottom: 10px">
    <div class="col-12" style="margin-top: 10px; padding-bottom: 120px">
        <h1>@lang('edu.create-thread')</h1>
        <form action="{{ route('forum.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">@lang('edu.lbl-thtitle')</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">@lang('edu.lbl-thmessage')</label>
                <textarea name="message" id="message" class="form-control" rows="5" required></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success">@lang('edu.btn-cthread')</button>
        </form>
    </div>
</div>

@endsection