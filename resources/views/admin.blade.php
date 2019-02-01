
    @include('includes.message-block')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>


    .greenBtn {
        background-color: #207e5c;
        width: 70px;
        height: 35px;
        font-family: open-sans;
        color: white;
        text-transform: uppercase;
        border: 0px;
        font-weight: bold;
        float:right;
    }
    body{
        height:100%;
        margin-bottom: 104px;
        clear: both;
        background-color: #f5f5f5;

        background-repeat: no-repeat;
        background-position: center;
        background-image: url({{ URL::to('public/images/bg.png') }});

        background-attachment: fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-si1ze: cover;
        background-size: cover;
    }

    div.well{
        height: 250px;
    }

    .Absolute-Center {
        margin: auto;
        position: absolute;
        top: 0; left: 0; bottom: 0; right: 0;
    }

    .Absolute-Center.is-Responsive {
        width: 50%;
        height: 50%;
        min-width: 200px;
        max-width: 400px;
        padding: 40px;
    }

    #logo-container{
        margin: auto;
        margin-bottom: 10px;
        width:180px;
        height:180px;
        background-image: url({{ URL::to('public/images/websiteLogo.png') }});
    }


    input:-webkit-autofill {
        -webkit-box-shadow: 0 0 0px 1000px white inset;
        width: 235px;
        height: 40px;
        padding: 10px;
        border: 0px;
        opacity:0.3;

    }

    .markField{
        -webkit-box-shadow: 0 0 0px 1000px white inset;
        width: 235px;
        height: 40px;
        padding: 10px;
        border: 0px;
        opacity:0.3;

    }



</style>


        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <form action="{{ route('signin') }}" method="post" id="loginForm">
                        <div class="form-group input-group">
                            <input class="markField" type="text" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group input-group">

                            <input class="markField" type="password" name="password" id="password" placeholder="Password">

                        </div>

                        <div class="form-group">

                            <!--Pretty butn-->


                            <button type="submit" class="greenBtn"> Login</button>
                            <input type="hidden" name="_token" value="{{ Session::token()}}">
                        </div>

                    </form>
                </div>
            </div>
        </div>