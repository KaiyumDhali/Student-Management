@extends('teacher.master')
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Course Form</h4>

                    <form method="post" action="{{route('course.update',['id' => $course->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="{{$course->title}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Fee</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="fee" value="{{$course->fee}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Starting Date</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="starting_date" value="{{$course->starting_date}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Duration</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="duration" value="{{$course->duration}}">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image" >
                                <img src="{{asset($course->image)}}"style="height: 100px; width: 100px;">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Description</label>
                            <div class="col-sm-9">
                                <textarea class="summernote" name="description" >{{$course->description}}</textarea>
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <input type="submit" class="btn btn-primary w-md">Create New Course</input>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

