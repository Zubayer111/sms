@extends('master.teacher.master')

@section("body")

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Subject</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Subject Title</th>
                                <th>Code</th>
                                <th>Fee</th>
                                <th>Teacher Name</th>
                                <th>Subject image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subjects as $subject)
                                
                            <tr>
                                <th class="text-wrap" scope="row">{{$loop->iteration}}</th>
                                <td class="text-wrap">{{$subject->title}}</td>
                                <td class="text-wrap">{{$subject->code}}</td>
                                <td class="email-wrap">{{number_format($subject->fee)}}</td>
                                <td class="numder-wrap">{{$subject->teacher->name}}</td>
                                <td class="numder-wrap">
                                    <img src="{{asset($subject->image)}}" alt="" height="50" width="50">
                                </td>
                                <td>{{$subject->status == 1 ? "Active" : "Inactive"}}</td>
                                <td>
                                    <a href="{{route("edit-subject", ["id" => $subject->id])}}" class="btn btn-success btn-secondary btn-sm m-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route("delete-subject", ["id" => $subject->id])}}" class="btn btn-danger btn-sm m-1 {{$subject->id == 1 ? "disabled" : ""}}">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
    
    
</div>

@endsection