@extends('website.master')
@section('title')
    Enroll Page
@endsection

@section('body')
    <section>
        <div class="container-fluid py-5 bg-secondary ">
            <div class="row">
                <div class="col">
                    <h1 class="text-center text-black">Enroll Now of {{$course->title}}</h1>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body h-100 shadow">
                        <h1>Enroll Form</h1>
                        <hr/>
                        <form action="{{route('enroll.new',['id'=>$course->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="mobile">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-md-3">payment option</label>
                                <div class="col-md-9">
                                 <label>  <input type="radio"  name="payment_method" checked value="cash"/>Cash</label>
                                 <label>  <input type="radio"  name="payment_method" value="online"/>Online</label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success px-5" value="Enroll Now">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
