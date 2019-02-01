@extends('layouts.master')

@section('title')
    Contact
@endsection
@include('includes.header')
@section('content')
    @include('includes.message-block')


    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <div class="panel panel-default" name="personalProjects" >
        <div class="panel-body">
            <p class="bigbig">Get in touch</p>

            <div class="row">
                <div class="col-md-4">
                    <img src="{{URL::to('images/contactPageIcons/phoneIcon.png') }}" class="img-responsive center-block" width="50px" height="50px">
                    <br>
                    <p class="text-center">+1 540 313 2628</p>
                </div>
                <div class="col-md-4">
                    <img src="{{URL::to('images/contactPageIcons/skypeIcon.png') }}" class="img-responsive center-block" width="50px" height="50px">
                    <br>
                    <p class="text-center">@myounghunkang92</p>

                </div>
                <div class="col-md-4">
                    <img src="{{URL::to('images/contactPageIcons/mailIcon.png') }}" class="img-responsive center-block" width="50px" height="50px">
                    <br>
                    <p class="text-center">kangm210@gmail.com</p>
                </div>
            </div>
            <br>
            <div class="row">
            <form class="form-horizontal center_div " role="form" method="post" action="index.php">
                <div class="form-group">

                        <input type="email" class="form-control" id="email" name="email" placeholder="EMAIL" value="">

                </div>
                <div class="form-group">

                    <input type="text" class="form-control" id="subject" name="subject" placeholder="SUBJECT" value="">

                </div>

                <div class="form-group">


                        <textarea class="form-control" rows="4" name="Message" placeholder="MESSAGE"></textarea>

                </div>

                <div class="form-group">
                    <p class="text-right">
                         <button type="submit" class="gogooma">Send</button>

                    </p>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <! Will be used to display an alert to the user>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection
