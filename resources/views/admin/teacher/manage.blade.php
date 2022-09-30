@extends('admin.master')

@section('title')
    Teachers Manage Page
@endsection

@section('body')
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title text-center">All Teachers Information</h4>
                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>SL NO</th>
                        <th>Teacher Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>


                    <tbody>
                    @foreach($teachers as  $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->phone}}</td>
                            <td><img src="{{asset($teacher->image)}}" alt="" style="height: 100px;width: 100px;"></td>
                            <td>
                                <a href="{{route('teacher.TeacherUpdate',['id' => $teacher->id])}}" class="btn btn-success">Edit</a>
                                <a href="{{route('teacher.delete',['id' => $teacher->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure to delete this')">Delete</a>
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


