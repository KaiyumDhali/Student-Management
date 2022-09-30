@extends('website.master')
@section('title')
    {{ $course->title}}
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <img src="{{asset($course->image)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100">
                            <h3>{{$course->title}}</h3>
                            <h3>Trainer name: {{$course->teacher->name}}</h3>
                            <p>Starting Date: {{$course->starting_date}}</p>
                             @if($course->offer_fee >0)
                                <h4>Course Regular fee:{{$course->fee}}</h4>
                                <h4>Course Offer fee:{{$course->offer_fee}}</h4>
                        @else
                                <h3>Course fee tk:{{$course->fee}}</h3>
                        @endif


                            <a href="{{route('enroll-now',['id'=>$course->id])}}" class="btn btn-outline-success position-relative position-absolute top-50 start-50 translate-middle" style="width: 100px;">enroll</a>



                    </div>
                </div>
                <div class=" row py-5">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="text-center">Course Details</h2>
                            </div>
                            <div class="card-body">
                            {!! $course->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
