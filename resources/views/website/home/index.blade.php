@extends ('website.master')
@section('title')
    Simple student Management System
@endsection

@section('body')
    <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800" id="slider">

        <ol class=" carousel-indicators">
            @foreach($offerCourses as $key => $offerCourse)
                <li data-bs-target="#slider" data-bs-slide-to="{{$key}}" class="{{$key ==0 ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($offerCourses as $key1 => $offerCourse)
            <div class="carousel-item {{$key1 ==0 ? 'active' : ''}}" >
                <img src="{{asset($offerCourse->banner_image)}}" alt="" class="w-100 image">
                <div class="carousel-caption my-caption text-dark">
                    <h1>{{$offerCourse->title}}</h1>
                    <p>{{$offerCourse->Description}}</p>
                    <a href="{{route('details.course',['id'=>$offerCourse->id])}}" class="btn btn-outline-success px-5" >Read more</a>
                </div>
            </div>
            @endforeach

        <a href="#slider" class="carousel-control-prev" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></a>
        <a href="#slider" class="carousel-control-next" data-bs-slide="next"><span class="carousel-control-next-icon"></span></a>
    </div>


    <section>
    <div class="container-fluid py-5 bg-secondary ">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-black">Our Popular Course</h1>
            </div>
        </div>
    </div>
        <div class="container py-5">
        <div class="row">
            @foreach($courses as $course)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <img src="{{asset($course->image)}}">
                    <div class="card-body">
                        <h3>{{$course->title}}</h3>
                        <h5>{{$course->teacher->name}}</h5>
                        <p>{{$course->fee}}</p>
                        <a href="{{route('details.course',['id'=>$course->id])}}" class="btn btn-outline-success">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    </section>



        <section>
            <div class="container-fluid py-5 bg-secondary ">
                <div class="row">
                    <div class="col">
                        <h1 class="text-center text-black">Recent Course </h1>
                    </div>
                </div>
            </div>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{asset('/website/img/images.jpg')}}">
                            <div class="card-body">
                                <h4>Android App Development</h4>
                                <h5>MD Habib Sir</h5>
                                <h5>Tk. 20000</h5>
                                <p>Starting Date 12-10-22</p>
                                <a class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{asset('/website/img/images.jpg')}}">
                            <div class="card-body">
                                <h3>Responsive web DEsign</h3>
                                <h5>MD Habib Sir</h5>
                                <h5>Tk. 12000</h5>
                                <p>Starting Date 12-10-22</p>
                                <a class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{asset('/website/img/images.jpg')}}">
                            <div class="card-body">
                                <h3>Responsive web DEsign</h3>
                                <h5>MD Habib Sir</h5>
                                <h5>Tk. 12000</h5>
                                <p>Starting Date 12-10-22</p>
                                <a class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>



@endsection
