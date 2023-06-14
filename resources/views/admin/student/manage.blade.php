@extends("master.admin.master")

@section("body")

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Student</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Full Name</th>
                                <th>Student ID</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                
                            <tr>
                                <th class="text-wrap" scope="row">{{$loop->iteration}}</th>
                                <td class="text-wrap">{{$student->name}}</td>
                                <td class="text-wrap">{{$student->id}}</td>
                                <td class="email-wrap">{{$student->email}}</td>
                                <td class="numder-wrap">{{$student->mobile}}</td>
                                <td>{{$student->status == 1 ? "Active" : "Inactive"}}</td>
                                <td>
                                    <a href="{{route("student-status", ["id" => $student->id])}}" class="btn btn-success {{$student->status == 1 ? "btn-success" : "btn-warning" }} btn-sm m-1">
                                        <i class="fa fa-upload"></i>
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