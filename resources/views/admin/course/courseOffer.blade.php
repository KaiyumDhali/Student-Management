
@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Course Offer Form</h4>
                    <form method="post" action="{{route('admin.create-course-offer')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Title</label>
                                <div class="col-sm-9">

                                    <select class="form-select" aria-label="Default select example" name="course_id">

                                            <option disabled selected>-- Open this select menu --</option>
                                        @foreach($courses as $course)
                                            <option value="{{$course->id}}">{{$course->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Banner Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="image" class="">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Offer Price</label>
                            <div class="col-sm-9">
                                <input type="number" name="offer_fee" class="">
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

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">All Offer Course Information</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Course Title</th>
                            <th>starting_date</th>
                            <th>Offer Fee</th>
                            <th>Course Fee</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($offerCourses as  $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->starting_date}}</td>
                                <td>{{$course->offer_fee}}</td>
                                <td>{{$course->fee}}</td>
                                <td>
                                    <a href="{{route('admin.course-offer-edit',['id'=>$course->id])}}" class="btn btn-success btn-sm" title="View Course Details">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>dy>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div>
@endsection

