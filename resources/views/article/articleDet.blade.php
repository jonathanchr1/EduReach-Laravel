@extends('base.master')

@section('pagecontent')
<div class="container-fluid" style="margin-top: 25px; margin-bottom: 25px">
    <div class="row">
        <div class="col-12">
            <h1>{{ $article->title }}</h1>
            <img src="{{ asset('/'.$article->image) }}" style="margin-top: 20px; margin-bottom:20px width: 75%; border-radius: 25px; display: block; margin-left: auto; margin-right: auto">
            <div style="padding: 0 50px 0 50px">
                <br>
                <p>@lang('edu.lbl-by') {{ $article->writer }}</p>
                <p>{{ $article->body }}</p>
                <a href="{{ route('view.articles') }}" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">@lang('edu.btn-back')</a>
            </div>
        </div>
    </div>
</div>
@endsection