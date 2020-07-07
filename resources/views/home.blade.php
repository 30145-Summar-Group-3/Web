


@extends('layouts.app')

@section('content')
<link type="text/css" rel="stylesheet" href="https://cdn.phpjabbers.com/css/main.min.css?v=1.0.85" media="all" />
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}" media="all" />

<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="all" />


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Training Group</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

              


                    <h1>Welcome In Your Training Group ...</h1>
                    <h3><b>The Registration was Successful</b></h3>
                    <p>We hope to continue by submitting the form 
                        from the link belwo for registration in training </p>
                    <BR>

                    <a href="{{ url('/join') }}">join the training now</a>


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
