@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-top: 30px; margin-bottom: 30px">
    <div class="row">
        <div class="col-12">
            <img src="{{asset('img/course-logo.jpg')}}" style="display: block; width: 50%; margin-left: auto; margin-right: auto; border-radius: 10px; border: solid black">
            <h1 style="margin-top: 20px">{{ $course->name }}</h1>
            <p><strong>@lang('edu.lbl-desc')</strong> </p>
            <p>{{ $course->description }}</p>
            <p><strong>@lang('edu.role-teach'):</strong> {{ $course->teacher->name }}</p>
        </div>
    </div>
    <div class="container" style="margin-left: 15px">
        <h3>@lang('edu.lbl-materials')</h3>
        @if($course->materials->isEmpty())
            <p>No materials available for this course.</p>
        @else
            <ul class="list-group">
                @foreach($course->materials as $material)
                    <li class="list-group-item">
                        <strong>{{ $material->name }}</strong> - <a href="{{ $material->link }}" target="_blank">@lang('edu.view-material')</a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
@endsection