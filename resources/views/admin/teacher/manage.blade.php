@extends("master.admin.master")

@section("body")

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Manage Teacher</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <div class="table-responsive">
                    <table class="table mb-0 table-bordered table-hover">

                        <thead>
                            <tr>
                                <th>SL No</th>
                                <th>Full Name</th>
                                <th>Code</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($teachers as $teacher)
                                
                            <tr>
                                <th class="text-wrap" scope="row">{{$loop->iteration}}</th>
                                <td class="text-wrap">{{$teacher->name}}</td>
                                <td class="text-wrap">{{$teacher->code}}</td>
                                <td class="email-wrap">{{$teacher->email}}</td>
                                <td class="numder-wrap">{{$teacher->mobile}}</td>
                                <td class="text-wrap">{{$teacher->address}}</td>
                                <td>
                                    <img src="{{asset($teacher->image)}}" alt="" height="50" width="50">
                                </td>
                                <td>{{$teacher->status == 1 ? "Active" : "Inactive"}}</td>
                                <td>
                                    <a href="{{route("edit-teacher", ["id" => $teacher->id])}}" class="btn btn-success btn-secondary btn-sm m-1">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route("delete-teacher", ["id" => $teacher->id])}}" class="btn btn-danger btn-sm m-1">
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