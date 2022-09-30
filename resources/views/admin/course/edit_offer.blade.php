
@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Course Offer Form</h4>
                    <form method="post" action="{{route('admin.course-offer-Update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">

                                <select class="form-select" aria-label="Default select example" name="course_id">

                                    <option disabled selected>-- Open this select menu --</option>
                                    @foreach($courses as $course)
                                        <option value="{{$courses->id}}" {{$courses->id == $single_course->id ? 'selected' : ''}}>{{$courses->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Banner Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="form-control">
                                <img src="{{asset($single_course->banner_image)}}"alt="" style="height: 300px;width: 300px;  ">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Offer Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="offer_fee" class="" value="{{$single_course->offer_fee}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <input type="submit"  class="btn-success btn" value="Create new offer">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

