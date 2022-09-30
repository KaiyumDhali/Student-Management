<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SSMSB7 @yield('title')</title>
    <link rel="stylesheet" href="{{asset('/website/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('/website/css/style.css')}}">

    <style>
        .my-caption
        {
            background: rgba(0,0,0,0.5);
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">SSMSB7</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('courses')}}" class="nav-link">All Course</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li><a href="{{route('login-registration')}}" class="nav-link">Login/Registration</a></li>
        </ul>
    </div>
</nav>
@yield('body')
<footer>
    <section class="py-5 bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h1 class="text-uppercase">SSMS B7</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A commodi dignissimos ducimus eos facere nihil quaerat repellat repudiandae. Deleniti eius expedita facere illum iusto, laborum obcaecati quis temporibus voluptates! Quasi?</p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4>Popular Link</h4>
                        <hr/>
                        <ul class=" navbar-nav">
                            <li><a href="" class="nav-link">About Us</a></li>
                            <li><a href="" class="nav-link">Our Courses</a></li>
                            <li><a href="" class="nav-link">Our Instructor</a></li>
                            <li><a href="" class="nav-link">Contact Us</a></li>
                        </ul>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-body h-100">
                        <h4>Contact with Us</h4>
                        <hr/>
                        <address>

                            House # 420, Road # 48, Mohammadpur,Dhaka<br/>
                            <b>Phone:</b> 01757752412<br/>
                            <b>Email:</b> kaium.swe@gmail.com
                        </address>
                        <ul class="nav">
                            <li><a href="" class="nav-link"><i class="fab fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="" class="nav-link"><i class="fab fa-instagram-square"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col bg-black">
                    <p class="text-center text-white">copyright@Basis <b>Seip</b> || Develop By Md Kaiyum Dhali</p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script src="{{asset('/website/js/bootstrap.bundle.js')}}"></script>
</body>
</html>
