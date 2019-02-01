<!DOCTYPE html>
<html>


<head>
    <title>@yield('title')</title>
    
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('public/src/css/footer.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/src/css/hoover/hover.css')}}" media="all">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"  type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('public/src/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::to('public/src/css/hoover/imageHooverEffect.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::to('public/src/css/additionalNav.css') }}">
    
</head>
<body>
	<div class="container">
	@yield('content')
  	</div>

    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ URL::to('public/src/js/app.js') }}"></script>
    @include('includes.footer')
</body>
</html>