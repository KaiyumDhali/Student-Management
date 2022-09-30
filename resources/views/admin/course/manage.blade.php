@extends('admin.master')

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
                            <th>Teacher Information</th>
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
                                <td>{{$course->teacher->name.'('.$course->teacher->phone.')'}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->starting_date}}</td>
                                <td>{{$course->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('admin.course.details',['id'=>$course->id])}}" class="btn btn-success btn-sm" title="View Course Details">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route('admin.update.course.status',['id'=>$course->id])}}" class="btn {{$course->status ==0 ? 'btn-warning' : 'btn-success'}}" title="update Course status">
                                        <i class="fa fa-arrow-up"></i>
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



