@extends('teacher.master')
@section('body')
    <div class="row">
        <div class="col">
            <div class="card card-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Course Id</th>
                        <td>{{$course->id}}</td>
                    </tr>

                    <tr>
                        <th>Course title</th>
                        <td>{{$course->title}}</td>
                    </tr>
                    <tr>
                        <th>Course fee</th>
                        <td>{{$course->fee}}</td>
                    </tr>
                    <tr>
                        <th>Course Starting Date</th>
                        <td>{{$course->starting_date}}</td>
                    </tr>

                    <tr>
                        <th>Course Duration</th>
                        <td>{{$course->duration}}</td>
                    </tr>
                    <tr>
                        <th>Course Image</th>
                        <td><img src="{{asset($course->image)}}" style="height: 100px; width: 100px;"></td>
                    </tr>
                    <tr>
                        <th>Course Description</th>
                        <td>{!! $course->description !!}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
