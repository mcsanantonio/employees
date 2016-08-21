<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Employees Record</title>
        
        <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
        
    </head>

    <body>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                  <a href="{{ url('/') }}" class="navbar-brand">Employees Record</a>
                  <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>
                <div class="navbar-collapse collapse" id="navbar-main">
                  <ul class="nav navbar-nav">
                    <li>
                      <a href="{{ url('/create')}}">Add New Employee</a>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
