
@extends('layouts.app')


@section('content')
<link type="text/css" rel="stylesheet" href="https://cdn.phpjabbers.com/css/main.min.css?v=1.0.85" media="all" />
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}" media="all" />
<link rel="stylesheet" href="{{URL::asset('css/app.css')}}" media="all" />


<div class="container box">
   <!-- <h3 allign="center">Send Email To commuity</h3><br/> -->
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif
   @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif

   <div class="container">
    <div class="row justify-content-center">
        <div class="form fA tabs">
        <h3 allign="center">Send Email To commuity</h3><br/>
   <form method="post" action="{{url('sendemail/send')}}">
    {{ csrf_field() }}
    <div class="form-group">
     <label>Name</label>
     <input type="text" name="name" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Email</label>
     <input type="text" name="email" class="form-control" value="" />
    </div>
    <div class="form-group">
     <label>Message</label>
     <textarea name="message" class="form-control"></textarea>
    </div>
    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
    
   </form>
   </div>
   </div>
   </div> 
   
  </div>

@endsection



