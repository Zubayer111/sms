<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("/")}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset("/")}}css/all.css">
    <link rel="stylesheet" href="{{asset("/")}}css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light border-bottom shadow mb-3 sticky-top">
        <div class="container">
            <a href="{{route("home")}}" class="navbar-brand">IOGO</a>
            <ul class="navbar-nav">
                <li><a href="{{route("home")}}" class="nav-link">Home</a></li>
                <li><a href="{{route("home")}}" class="nav-link">All Cource</a></li>
                @if (Session::get("student_id"))
                <li class="dropdown">
                    <a href="{{route("user-login")}}" class="nav-link dropdown-toggle" id="dropdownMenulink" role="button" aria-expanded="false" data-bs-toggle="dropdown">
                    {{Session::get("student_name")}}</a>
                    <ul  class="dropdown-menu" aria-labelledby="dropdownMenulink">
                        <li><a href="{{route("student-dashboard")}}" class="nav-link">Dashboard</a></li>
                        <li><a href="" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('studentLogoutForm').submit();">Logout</a></li>
                        <form action="{{route('student-logout')}}" method="POST" id="studentLogoutForm">
                            @csrf
                        </form>
                    </ul>
                </li>
                
                @else
                <li><a href="{{route("user-login")}}" class="nav-link">Login</a></li>
                <li><a href="{{route("user-register")}}" class="nav-link">Registration</a></li>
                @endif
                
            </ul>
        </div>
    </nav>
    
    @yield("body")

    <footer>
        <section class="py-5 bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">About Institute</h2>
                                <hr>
                                <p class=" card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dolor voluptatum, doloremque dicta nihil aut nulla quas numquam sint incidunt sit cupiditate. Doloribus libero ipsa voluptatem ratione adipisci quasi nobis?</p>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                            <div class="card-body">
                                <h2 class="card-title">Popular Link</h2>
                                <hr>
                                <ul>
                                    <a href=""><li>Popular Link 1</li></a>
                                    <a href=""><li>Popular Link 2</li></a>
                                    <a href=""><li>Popular Link 3</li></a>
                                    <a href=""><li>Popular Link 4</li></a>
                                    <a href=""><li>Popular Link 5</li></a>
                                    
                                </ul>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                            <div class="card-body">
                                    <h2 class="card-title">Follow Us On</h2>
                                    <hr>
                                    <div class="row d-block">
                                        <a href=""><i class="fa-brands fa-2x fa-facebook-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-twitter-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-instagram-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-github-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-whatsapp-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-youtube-square"></i></a>
                                    </div>
                                    <div class="row d-block">
                                        <a href=""><i class="fa-brands fa-2x fa-facebook-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-twitter-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-instagram-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-github-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-whatsapp-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-youtube-square"></i></a>
                                    </div>
                                    <div class="row d-block">
                                        <a href=""><i class="fa-brands fa-2x fa-facebook-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-twitter-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-instagram-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-github-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-whatsapp-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-youtube-square"></i></a>
                                    </div>
                                    <div class="row d-block">
                                        <a href=""><i class="fa-brands fa-2x fa-facebook-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-twitter-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-instagram-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-github-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-whatsapp-square"></i></a>
                                        <a href=""><i class="fa-brands fa-2x fa-youtube-square"></i></a>
                                    </div>
                            </div>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-white mt-5"/>
                    <div class="py-3">
                        <p class="text-center text-white">Copyright@2022, All right received by BASIS SEIP PWLFB-3</p>
                    </div>
                </div>
          </section>
    </footer>

    <script src="{{asset("/")}}js/jquery-3.6.0.min.js"></script>
    <script src="{{asset("/")}}js/bootstrap.js"></script>
</body>
</html>