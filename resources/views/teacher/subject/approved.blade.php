@extends('master.teacher.master')

@section("body")

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Approve Subject</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Subject Title</th>
                                <th>Code</th>
                                <th>Fee</th>
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
                                <td>{{$subject->status == 1 ? "Active" : "Inactive"}}</td>
                                <td>
                                    <a href="{{route("enroll-student", ["id" => $subject->id])}}" class="btn btn-success btn-sm m-1">
                                        <i class="fa fa-list"></i>
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