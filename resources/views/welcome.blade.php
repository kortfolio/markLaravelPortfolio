@extends('layouts.master')

@section('title')
    Welcome to Mark Kang's personal website :D
@endsection
@include('includes.header')
@section('content')
    <link rel="stylesheet" href="{{ URL::to('public/src/css/main.css') }}">
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>5
    <![endif]-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

    <div class="panel panel-default">
        <!-- Greetings Tab -->
        <div class="panel-body">
            <div class="media">
                <div class="media-left media-middle">
                    <!--Profile Picture-->
                    <img class="media-object" src="{{ URL::to('public/images/profilePicMockUp.png') }}">
                </div>
                <div class="media-body">
                    <!--Name, Location, and Greetings Message-->
                    <p class="pull-right"><button class="viewMore">View more</button></p>
                    <p class="boldName">Mark Kang </p>
                    <!--Location-->

                    <p class="statusDate">Jan 29</p>
                    <p>Be aware.. $npm install </p>

                </div>
            </div>
            <!--Profile Pic-->


        </div>
    </div>


    <!--Project Title Tab-->


<div class="panel panel-default">
    <div class="panel-body">
        <p class="TitleDecoration">PERSONAL PROJECTS</p>
            </div>
</div>

    <!--Contents Tabs-->


    <!--Project Post list-->

    <div class="row posts">
        @foreach($posts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <br>
                    <div class="hovereffect">
                        <a href="#">
                            <div style="visibility: hidden; height: 1px">
                                {!! $post->body !!}
                            </div>

                           <img src="https://www.kortfolio.com/public/images/{{ $post->projectThumbnail}}"
                                 class="pop">

                        </a>
                    </div>
                    <div class="caption">
                        <p class="projectTitle">{{ $post->projectTitle}}</p>
                        <p class="categoriesFont">{{ $post->projectCategories }}</p>
                               <!--Modal for display extra info-->
                    </div>
                </div>
            </div>


    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            
                <div class="modal-body " name="post-body2" id="post-body2">
                               ..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!--
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <img src="" class="imagepreview" style="width: 100%;" >
                </div>
            </div>
        </div>
    </div>
    -->
    @endforeach
    </div>



@endsection
