@extends('layouts.master')
@include('includes.header')
@section('content')@include('includes.message-block')

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

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
                <p class="boldName">Mark Kang</p>
                <!--Location-->
                <p class="graySmall">
                    <img class="media-object" src="{{ URL::to('public/images/location.png') }}"
                         style="display: inline"> Puyallup, WA
                </p>
                <p>"Programming is like a choose your own adventrue game except every path leads to you lying in bed at 2am thinking about a bug you couldn't fix that day."</p>
            </div>
        </div>
        <!--Profile Pic-->
    </div>
</div>

<!--Project Title Tab-->

<div class="panel panel-default">
    <div class="panel-body">
        <p class="abel"> PERSONAL PROJECTS
            <button id="show" class="skyBlueBtn2">+</button>
        </p>
    </div>
</div>

<section class="new-post">
    <div class="panel panel-default">
        <div class="panel-body">
            <form action="{{ route('post.create') }}" method="post" enctype="multipart/form-data">
                <div class="form-group col-md-3">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        <img src="public/images/{{ Session::get('imageName') }}"
                             width="300px" height="300px" name="projectThumbnail"/>
                    @endif
                    <div class="projectThumbnail">
                        <label for="projectThumbnail">
                            <img src="public/images/projectThumbnails/defaultThumbnail.png"
                                 width="250px" height="250px"/>
                        </label>
                        <input type="file" name="projectThumbnail" id="projectThumbnail" style="display:none">
                    </div>
                </div>
                <div class="media-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input class="form-control input-group-lg reg_name" type="text" name="projectTitle"
                                   title="Enter Project Title"
                                   placeholder="Project Title"/>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="lastname" class="sr-only"></label>
                            <input id="lastname" class="form-control input-group-lg reg_name" type="text"
                                   name="projectCategories"
                                   title="Enter Project Categories"
                                   placeholder="Project Categories"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">

                                <textarea class="form-control input-group-lg reg_name" name="body" id="new-post"
                                          rows="5" placeholder="Project Description"></textarea>
                            <br>
                            <button class="skyBlueBtn">post</button>
                            <input type="hidden" value="{{ Session::token() }}" name="_token">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

<!--Project Post list-->
<div class="row posts">

        @foreach($posts as $post)
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="{{ route('post.delete', ['post_id' => $post->id]) }}" class="close">X</a>
                    <br>
                    <div class="hovereffect">
                        <a href="#">
                            <div style="visibility: hidden; height: 1px">
                                {!! $post->body !!}
                            </div>
                            <img src="public/images/{{ $post->projectThumbnail}}"
                                 width="300px" height="300px" class="pop">

                        </a>
                    </div>
                    <div class="caption">
                        <p class="projectTitle">{{ $post->projectTitle}}</p>
                        <p class="categoriesFont">{{ $post->projectCategories }}</p>
                        <!--Modal for display extra info-->
                    </div>
                </div>
            </div>
    @endforeach
</div>

<div class="row posts">




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $('.post').find('.edit').on('click', function (event) {

        console.log('it works!');
        event.preventDefault();
        postBodyElement = event.target.parentNode.parentNode.childNodes[1];
        var postBody = postBodyElement.textContent;
        postId = event.target.parentNode.parentNode.dataset['postid'];
        $('#post-body').val(postBody);
        $('#edit-modal').modal();
    });
</script>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 500,
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste imagetools"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",

        image_class_list: [
            {title: 'Responsive Image', value: 'img-responsive'}
        ],

        imagetools_cors_hosts: ['www.tinymce.com', 'codepen.io'],
        content_css: [
            '//fast.fonts.net/cssapi/e6dc9b99-64fe-4292-ad98-6974f93cd2a2.css',
            '//www.tinymce.com/css/codepen.min.css'
        ]

    });
</script>
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Project Detail</h4>
                </div>
                <div class="modal-body " name="post-body2" id="post-body2">
                    ..
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection
@include('includes.footer')