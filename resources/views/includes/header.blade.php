<header>

    <!--This php file contains navgation bar of the website :)->
      <!-- Static navbar -->

    <nav class="navbar navbar-default navbar-static-top"
         style="background-color: #91a7d0; height: 104px; padding: 10px">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				 <img class="img-responsive" src="{{ URL::to('public/images/logo.png') }}">
              
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li><a href="/"
                           class="hvr-underline-reveal navFont">HOME</a></li>
                    <li><a href="/about" class="hvr-underline-reveal navFont">ABOUT</a>
                    </li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                 </ul>-->

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
</header>

