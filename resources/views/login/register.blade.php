@extends("master.front.master")

@section("body")

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class=" card-header">Login Form</div>
                        <div class=" card-body">
                            <p class="text-center text-danger">{{Session::get("message")}}</p>
                            <form action="{{route('new-register')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <label class="col-md-3">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <label class="col-md-3">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 py-3">Mobile Number</label>
                                    <div class="col-md-9">
                                        <input type="numder" class="form-control" name="mobile">
                                    </div>
                                </div>
                                <div class="row py-3">
                                    <label class="col-md-3">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-primary" value="Registration">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection