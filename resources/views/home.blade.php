@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

{{--                    @if(Auth::user()->utype === 'ADM')--}}
{{--                        <li>--}}
{{--                            <a href="{{route('admin.index')}}" class="d-block">Dashboard</a>--}}
{{--                        </li>--}}
{{--                    @else--}}
{{--                        <li>--}}
{{--                            <a href="{{route('user.index')}}" class="d-block">My Account</a>--}}
{{--                        </li>--}}
{{--                    @endif--}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(auth()->user()->utype == 'user')
                        {{ __('hello user') }}
                    @else
                        {{ __('hello admin') }}
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
