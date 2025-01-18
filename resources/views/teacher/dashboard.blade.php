@extends('baseUser.master')

@section('pagecontent')
<div class="container-fluid" style="margin-top: 30px">
    <div class="row">
        <div class="col-12">
        <img src="{{asset('img/banner.jpg')}}" style="display: block; width: 95%; margin-left: auto; margin-right: auto">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">@lang('edu.lbl-hello'), {{ $user->name }}</h1>
                    <p class="card-text">
                        <strong>Email:</strong> {{ $user->email }} <br>
                        <strong>@lang('edu.lbl-role'):</strong> {{ ucfirst($user->role) }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection