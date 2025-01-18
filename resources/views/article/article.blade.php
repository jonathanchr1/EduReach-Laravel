@extends('base.master')

@section('pagecontent')
<div class="container-fluid">
    @foreach ($articles as $a)
        <div class="row" style="margin-top: 25px; margin-bottom: 50px; margin-left: 50px">
            <div class="col-4">
                <img src="{{ asset('/'.$a->image) }}" style="width: 100%; border-radius: 25px">
            </div>
            <div class="col-8">
                <h3>{{ $a->title }}</h3>
                <p>@lang('edu.lbl-by') {{ $a->writer }}</p>
                <p style="padding-right: 100px">
                    {{ Str::words($a->body, 20, '...') }}
                </p>
                <a href="{{ route('view.articles.detail', $a->id) }}" style="border-radius: 50px; padding: 5px 20px 5px 20px; text-decoration: none; background-color: #071026; color: white">@lang('edu.read-more')</a>
            </div>
        </div>
    @endforeach
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</div>
@endsection