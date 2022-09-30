@extends('admin.master')

@section('body')
    <div class="row">


        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Add Teacher Form</h4>

                    <form method="post" action="{{route('teacher.update',['id' => $teacher->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$teacher->name}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" value="{{$teacher->email}}">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" value="{{$teacher->password}}">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="phone" value="{{$teacher->phone}}">
                            </div>
                        </div>


                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">File</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image">
                                <img src="{{asset($teacher->image)}}"style="height: 100px; width: 100px;">
                            </div>
                        </div>


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <input type="submit" class="btn btn-outline-success" value="submit">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

