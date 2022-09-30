@extends('website.master')
@section('title')
    All Course
@endsection

@section('body')

<section>
    <div class="container-fluid py-5 bg-secondary ">
        <div class="row">
            <div class="col">
                <h1 class="text-center text-black">All Training</h1>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img src="{{asset('/website/img/images.jpg')}}">
                    <div class="card-body">
                        <h3>Responsive web DEsign</h3>
                        <h5>MD Habib Sir</h5>
                        <h5>Tk. 12000</h5>
                        <p>Starting Date 12-10-22</p>
                        <a href="{{route('course.details')}}" class="btn btn-outline-success">Read More</a>
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



            <nav aria-label="Page navigation example">
                <div class="position-relative py-5">
                    <ul class="pagination position-absolute bottom-0 start-50 translate-middle ">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>
            </nav>



        </div>
    </div>
</section>



@endsection

