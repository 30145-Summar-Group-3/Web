@extends('layouts.app')


@section('content')

<link rel="stylesheet" href="{{URL::asset('css/app.css')}}" media="all" />
<link rel="stylesheet" href="{{URL::asset('css/main.css')}}" media="all" />
<link type="text/css" rel="stylesheet" href="https://cdn.phpjabbers.com/css/main.min.css?v=1.0.85" media="all" />




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Training Group Website</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Join As Admin</h1>

                    <a href="{{ url('/admin/dashboard') }}">To Estimate Student grades</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
