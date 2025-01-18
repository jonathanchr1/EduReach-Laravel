@extends('baseUser.master')

@section('pagecontent')

<div class="container-fluid" style="margin-top: 30px; margin-bottom: 30px">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/banner.jpg')}}" style="display: block; width: 95%; margin-left: auto; margin-right: auto">
        </div>
        <div class="col-12">
            <div class="container" style="margin-top: 10px; margin-left: 15px; margin-right: 15px">
                <h1>@lang('edu.lbl-tcourse')</h1>
                <a href="{{ route('teacher.courses.create') }}" class="btn btn-primary mb-3">@lang('edu.lbl-addtcourse')</a>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 10px; margin-left: 15px; margin-right: 15px; margin-bottom: 10px">
        @if($courses->isEmpty())
        <div class="col-12">
            <p>@lang('edu.lbl-ncf')</p>
        </div>
        @else
        @foreach ($courses as $course)
        <div class="col-3">
            <img src="{{asset('img/course-logo.jpg')}}" style="width: 100%">
        </div>
        <div class="col-9">
            <h1>{{$course->name}}</h1>
            <div>
                <a href="{{ route('teacher.courses.edit', $course->id) }}" class="btn btn-warning btn-sm">@lang('edu.lbl-edit')</a>
                <form action="{{ route('teacher.courses.destroy', $course->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('@lang('edu.confirm-del-tea')')">@lang('edu.lbl-delete')</button>
                </form>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection