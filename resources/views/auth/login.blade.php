<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Feels Like Home - Login</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                top: 0;
                z-index: 1;
                width: 50%;
                background: white;                
            }

            .position-ref {
                position: absolute;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                color: #000;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .home-images{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .three-rows{
                height: calc(100vh / 3);
            }

            .image-container{
                height: inherit;
            }

            .image-height{
                height: inherit;
                border: 3px solid #fff;
            }

            .page-title{
                background: transparent;
                border-radius: 10px;                
                color: #000;
            }

            .content.page-title label{
                width: 100%;
                text-align: left;
            }

            .content.page-title input{
                width: 100%;
            }

            @media only screen and (max-width: 767px) {
              .row{
                margin: 0;
              }
              .flex-center{
                width: 100%;
              }
              .background-images{
                display: none;
              }
              .full-height{
                height: 460px;
              }
            }

        </style>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="full-height">

            <div class="flex-center position-ref full-height">
                    <div class="top-right links">
                        <a href="{{ url('/') }}">Home</a>
                    </div>
                <div class="content page-title">
                    <h2>FEELS LIKE HOME</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label>Email</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif                            
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif                            
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary form-control">Login</button>
                        </div>
                    </form>
                    <p><a href="{{ url('/register') }}">Don't have account?</a></p>
                    <p><a href="{{ url('/password/reset') }}">Forgot Password?</a></p>
                </div>
            </div>

            <div class="background-images">
                <div class="d-none d-md-block col-md-12">
                    <div class="row three-rows">
                      <div class="col-md-5 image-container"><div class="row image-height"><img class="home-images" src="https://mydecorative.com/wp-content/uploads/2015/07/farmhouse-kitchen-620x439.jpg"></div></div>
                      <div class="col-md-3 image-container"><div class="row image-height"><img class="home-images" src="https://hgtvhome.sndimg.com/content/dam/images/hgrm/fullset/2013/1/9/0/TS-128953047_wood-kitchen-cabinets_s4x3.jpg.rend.hgtvcom.616.462.suffix/1405413691075.jpeg"></div></div>
                      <div class="col-md-4 image-container"><div class="row image-height"><img class="home-images" src="https://cdn.newsapi.com.au/image/v1/86b7dc4ce4d32f036e919a5706cd2865"></div></div>
                    </div>
                    <div class="row three-rows">
                      <div class="col-md-3 image-container"><div class="row image-height"><img class="home-images" src="https://assets.blog.hgtv.ca/wp-content/uploads/2018/03/14112853/small-living-room-ideas.jpg"></div></div>
                      <div class="col-md-5 image-container"><div class="row image-height"><img class="home-images" src="http://blog.westelm.com/wp-content/uploads/2015/01/Small_Living_Room_Before.jpg"></div></div>
                      <div class="col-md-4 image-container"><div class="row image-height"><img class="home-images" src="https://www.decoraid.com/wp-content/uploads/2018/09/best-bedroom-paint-colors.jpg"></div></div>
                    </div>
                    <div class="row three-rows">
                      <div class="col-md-3 image-container"><div class="row image-height"><img class="home-images" src="https://picsum.photos/640/480/?image=235"></div></div>
                      <div class="col-md-4 image-container"><div class="row image-height"><img class="home-images" src="https://picsum.photos/640/480/?image=225"></div></div>
                      <div class="col-md-5 image-container"><div class="row image-height"><img class="home-images" src="https://picsum.photos/640/480/?image=295"></div></div>
                    </div>                    
                </div>
                <div class="d-md-none">
                    <div class="row three-rows">
                      <div class="col-sm-5 image-container"><div class="row image-height"><img class="home-images" src="https://mydecorative.com/wp-content/uploads/2015/07/farmhouse-kitchen-620x439.jpg"></div></div>
                      <div class="col-sm-7 image-container"><div class="row image-height"><img class="home-images" src="https://hgtvhome.sndimg.com/content/dam/images/hgrm/fullset/2013/1/9/0/TS-128953047_wood-kitchen-cabinets_s4x3.jpg.rend.hgtvcom.616.462.suffix/1405413691075.jpeg"></div></div>
                    </div>
                    <div class="row three-rows">
                      <div class="col-sm-3 image-container"><div class="row image-height"><img class="home-images" src="https://assets.blog.hgtv.ca/wp-content/uploads/2018/03/14112853/small-living-room-ideas.jpg"></div></div>
                      <div class="col-sm-9 image-container"><div class="row image-height"><img class="home-images" src="http://blog.westelm.com/wp-content/uploads/2015/01/Small_Living_Room_Before.jpg"></div></div>
                    </div>
                    <div class="row three-rows">
                      <div class="col-sm-8 image-container"><div class="row image-height"><img class="home-images" src="https://picsum.photos/640/480/?image=235"></div></div>
                      <div class="col-sm-4 image-container"><div class="row image-height"><img class="home-images" src="https://picsum.photos/640/480/?image=225"></div></div>
                    </div>  
                </div>
            </div>
        </div>
    </body>
</html>
