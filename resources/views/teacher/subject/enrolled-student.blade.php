@extends('master.teacher.master')

@section("body")

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">All Enrolled Student</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Subject Title</th>
                                <th>Student Name</th>
                                <th>Student Id</th>
                                <th>Enroll Status</th>
                                <th>Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($enrolls as $enroll)
                                
                            <tr>
                                <th class="text-wrap" scope="row">{{$loop->iteration}}</th>
                                <td class="text-wrap">{{$enroll["course_title"]}}</td>
                                <td class="text-wrap">{{$enroll["student_name"]}}</td>
                                <td class="text-wrap">{{$enroll["student_id"]}}</td>
                                <td class="text-wrap">{{$enroll["enroll_status"]}}</td>
                                <td class="text-wrap">{{$enroll["payment_status"]}}</td>
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