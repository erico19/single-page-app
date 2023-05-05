

@extends('layouts.app')

@section('content')

<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1800x900/?beach')">

<div class="row justify-content-center mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Dashboard</div>
            <div class="card-body">
           
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @else
                    <div class="alert alert-success">
                        You are logged in successfully!
                    </div>       
                @endif                
            </div>
        </div>
    </div>    
</div>
    
@endsection



<div class="jumbotron text-light" style="background-image: url('https://source.unsplash.com/1800x900/?beach')">
  <div class="container">
    @if(Auth::user()) 
      <h1 class="display-4">Welcome back, {{ Auth::user()->nickname}}!</h1>
      <p class="lead">To your one stop shop for reservation management.</p>
      <a href="/dashboard" class="btn btn-success btn-lg my-2">View your Dashboard</a>
    @else
      <h1 class="display-3">Reservation management made easy.</h1>
      <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam in quia natus magnam ducimus quas molestias velit vero maiores. Eaque sunt laudantium voluptas. Fugiat molestiae ipsa delectus iusto vel quod.</p>
      <a href="/login" class="btn btn-success btn-lg my-2">Sign Up for Access to Thousands of Hotels</a>
    @endif                
  </div>
</div>