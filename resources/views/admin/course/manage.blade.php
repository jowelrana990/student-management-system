@extends('admin.master')

@section('title')
@endsection

@section('content')
    <!-- start row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Info</h4>
                    @if($message=Session::get('message'))
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times</span>
                            </button>
                        </div>
                    @endif


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Fee</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->start_date}}</td>
                                <td>{{$course->end_date}}</td>
                                <td>{{$course->teacher->name}}</td>
                                <td>{{$course->status==1?'Published':'Unpublished'}}</td>
                                <td>
                                    <a href="{{route('admin.course-detail',['id'=>$course->id])}}" class="btn btn-primary btn-sm">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    </a>
                                    <a href="{{route('admin.course-status',['id'=>$course->id])}}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div><!-- end row -->
@endsection
