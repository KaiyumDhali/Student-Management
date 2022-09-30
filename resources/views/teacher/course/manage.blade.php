@extends('teacher.master')

@section('title')
    Course Manage Page
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title text-center">All Course Information</h4>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>SL NO</th>
                            <th>Course Title</th>
                            <th>Fee</th>
                            <th>starting_date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($courses as  $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->starting_date}}</td>
                                <td>{{$course->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('course.details',['id' => $course->id])}}" class="btn btn-success btn-sm" title="View Course Details">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                   <a href="{{route('course.edit',['id' => $course->id])}}" class="btn btn-success btn-sm" title="Edit Course">Edit</a>
                                   <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this')" title="Delete Course">Delete</a>
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


