@extends("master.front.master")

@section("body")

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-center text-success">{{Session::get("message")}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card card-body">
                    <img src="{{asset($subject->image)}}" class="img-fluid w-100 h-100" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h2>{{$subject->title}}</h2>
                    <p>Course fee : {{$subject->fee}} $</p>
                    <a href="{{route("inroll-now", ["id" => $subject->id])}}" class="btn btn-outline-success w-25 mx-auto {{$check == true ? 'disabled btn-outline-danger' : ''}}">Enroll Now</a>
                    <hr>
                    <h3>{{$subject->teacher->name}}</h3>
                    <img src="{{asset($subject->teacher->image)}}" alt="" height="100" width="100">
                    <hr>
                    <p>{!! $subject->short_description !!}</p>
                </div>
            </div>
        </div>
        <hr>
    </div>
    
</section>

<section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body">
                    <h1>Cource Modul Detail</h1>
                    <hr/>
                    {!! $subject->long_description !!}
                    <hr/>
                    
                </div>
                
            </div>
            
        </div>

    </div>
</section>

@endsection