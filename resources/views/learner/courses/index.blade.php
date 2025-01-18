@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-top: 30px; margin-bottom: 30px">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/banner.jpg')}}" style="display: block; width: 95%; margin-left: auto; margin-right: auto">
        </div>
        <div class="col-12">
            <div class="container" style="margin-top: 10px; margin-left: 15px; margin-right: 15px">
                <h1>@lang('edu.lbl-allcourse')</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <form action="#" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="@lang('edu.search-bar')" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">@lang('edu.search-btn')</button>
            </div>
        </form>
    </div>

    <div class="container">
    @if($courses->count() > 0)
        <div class="row">
            @foreach($courses as $course)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{asset('img/course-logo.jpg')}}" style="width:100%">
                            <h5 class="card-title">{{ Str::words($course->name, 4, '...') }}</h5>
                            <p class="card-text">@lang('edu.role-teach'): {{ $course->teacher->name }}</p>
                            <a href="{{ route('learner.courses.show', $course->id) }}" class="btn btn-primary">@lang('edu.view-more')</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            {{ $courses->links() }}
        </div>
    @else
        <p class="text-center">@lang('edu.lbl-ncf')</p>
    @endif
    </div>

</div>

@endsection