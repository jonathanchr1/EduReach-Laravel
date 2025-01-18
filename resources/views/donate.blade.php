@extends('base.master')

@section('pagecontent')
<div class="container mt-5">
    <h1>@lang('edu.btn-donate')</h1>
    <form action="/donate" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">@lang('edu.lbl-dname')</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">@lang('edu.lbl-damount')</label>
            <input type="number" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">@lang('edu.lbl-dmessage')</label>
            <textarea class="form-control" id="message" name="message"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">@lang('edu.btn-donate')</button>
    </form>

    @if (isset($snapToken))
        <script>
            snap.pay('{{ $snapToken }}', {
                onSuccess: function(result){
                    window.location.href = '/payment/finish?result=' + JSON.stringify(result);
                },
                onPending: function(result){
                    window.location.href = '/payment/finish?result=' + JSON.stringify(result);
                },
                onError: function(result){
                    console.log(result);
                }
            });
        </script>
    @endif
</div>
@endsection