@extends("master.front.master")

@section("body")
  <h3 class="text-center text-danger">{{Session::get('message')}}</h3>
    <div id="carouselExampleSlidesOnly" class="carousel slide bg-info py-5" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
                <div class="container card py-3">
                    <h3 class="text-center card-title">Notice Hading</h3>
                    <hr/>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam perferendis officia, perspiciatis dolorem laudantium accusantium? Similique porro nihil nam temporibus commodi animi, tempore at esse minima iusto quam corrupti sed?</p>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus maxime esse dolore sint iusto eum quam distinctio fugiat reiciendis quae qui repudiandae iste praesentium repellendus, laborum optio vero eligendi veniam.</p>

                </div>
          </div>
          <div class="carousel-item">
                <div class="container card py-3">
                    <h3 class="text-center card-title">Notice Hading</h3>
                    <hr/>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam perferendis officia, perspiciatis dolorem laudantium accusantium? Similique porro nihil nam temporibus commodi animi, tempore at esse minima iusto quam corrupti sed?</p>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus maxime esse dolore sint iusto eum quam distinctio fugiat reiciendis quae qui repudiandae iste praesentium repellendus, laborum optio vero eligendi veniam.</p>

                </div>
          </div>
          <div class="carousel-item">
                <div class="container card py-3">
                    <h3 class="text-center card-title">Notice Hading</h3>
                    <hr/>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam perferendis officia, perspiciatis dolorem laudantium accusantium? Similique porro nihil nam temporibus commodi animi, tempore at esse minima iusto quam corrupti sed?</p>
                    <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus maxime esse dolore sint iusto eum quam distinctio fugiat reiciendis quae qui repudiandae iste praesentium repellendus, laborum optio vero eligendi veniam.</p>

                </div>
          </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container">
            <div class="row">
              @foreach ($subjects as $subject)
                
                <div class="col-md-6">
                    <div class="card mb-3" >
                        <div class="row g-0">
                          <div class="col-md-5">
                            <img src="{{asset($subject->image)}}" class="img-fluid w-100 h-100" alt=""/>
                          </div>
                          <div class="col-md-7">
                            <div class="card-body">
                                <figure>
                                    <blockquote class="blockquote">
                                      <p>{{$subject->title}}</p>
                                    </blockquote>
                                    <figcaption class="blockquote-footer">
                                      {{$subject->teacher->name}}
                                    </figcaption>
                                </figure>
                              <div>{!! $subject->short_description !!}</div>
                              <p class="card-text"><small class="text-muted">{{$subject->created_at}}</small></p>
                              <a href="{{route("course-detail", ["id" => $subject->id])}}" class="btn btn-outline-primary">Rede More</a>
                              <a href="" class="btn btn-outline-success float-end">Apply Now</a>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                    
              @endforeach 
            </div>
        </div>
        
    </section>
    <section class="py-5 bg-secondary">
        <div class="bg-secondary">
          <div class="container">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-9">
                        <input type="text" placeholder="Enter your Email Hare" class="form-control"/>
                    </div>
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-outline-success w-100" value="Subscribe Now"/>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </section>
@endsection