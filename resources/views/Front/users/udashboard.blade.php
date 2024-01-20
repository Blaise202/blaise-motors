@include('Front.users.manager.hr.include.header')

@include('Front.home.include.header')
</head>

<body>
    <section>
        <div class="top-area ">
            <div class="header-area">
                <div class="">
                    <table style="font-family: 'Times New Roman', Times, serif" class="table table-light table-bordered">
                        <th><button  class="btn btn-primary w-100" >BLAISE MOTORS</button></th>
                        <th><a href="">Cars for sale</a></th>
                        <th><a href="">New cars</a></th>
                        <th><a href="">Research and reviews</a></th>
                        <th><a href="">News and videos</a></th>
                        <th><a href="">Sell Your Car</a></th>
                        <th><a href="">financing</a></th>
                        <th><a href="">contact us</a></th>
                        <th>
                            <button  class="btn btn-success w-100">
                                @if(is_null($data[1]))
                                <div class="d-flex">
                                    <h6><i class="ti ti-user fs-6"></i></h6>
                                    <h6> {{ $data[0] }}</h6>
                                </div>
                                @else
                                    <img src="usersImages/{{ $data[1] }}" width="35" height="35" class="rounded-circle"><br>
                                    <h6> {{ $data[0] }}</h6>
                                @endif
                            </button>
                        </th>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <Section class="pt-5">
        <div class="container">
            <div class="bg-light">
                <div class="p-3">
                    <div class="row">
                        <div class="width-30 float-left d-flex">
                            <p>Get your desired car</p>
                        </div>
                    </div>
                    <table class="table table-primary">
                        <thead>
                            <tr>
                                <td><input class="form-control" name="make" id="" placeholder="Car make"></td>
                                <td><input class="form-control" name="model" id="" placeholder="car model"/></td>
                                <td><input class="form-control" name="milleage" id="" placeholder="Car Mileage"></td>
                                <td><a href="{{ url('searchCar') }}" class="btn btn-secondary">Search</a></td>
                            </tr>
                        </thead>
                    </table>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @elseif(session('results'))
                        <h2>Search Results:</h2>
                        <ul>
                            @foreach(session('results') as $result)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-featured-cars">
                                    <div class="featured-img-box">
                                        <div class="featured-cars-img">
                                            <img src="carimages/{{ $result->car_image }}" alt="cars">
                                        </div>
                                        <div class="featured-model-info">
                                            <p>
                                                model: {{ $result->car_model }}
                                                <span class="featured-mi-span"> {{ $result->mileage }} mi</span>
                                                {{ $result->transmission }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="featured-cars-txt">
                                        <h2><a>{{ $result->car_make }} {{ $result->body_type }}</a></h2>
                                        <h3>$ {{ $result->price }}</h3>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </Section>
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <p><h2>Popular Categories</h2></p>
            <div class="d-flex full-width pl-4 p-3 end-10">
                <a href="{{ url('showacer') }}" class="btn btn-outline-danger border m-1"> acer</a>
                <a href="{{ url('showdish') }}" class="btn btn-outline-danger border m-1">dish</a>
                <a href="{{ url('showrambolghini') }}" class="btn btn-outline-danger border m-1">rambolghini</a>
                <a href="{{ url('showhonda') }}" class="btn btn-outline-danger border m-1">honda</a>
                <a href="{{ url('showhyundai') }}" class="btn btn-outline-danger border m-1">hyundai</a>
                <a href="{{ url('showferrari') }}" class="btn btn-outline-danger border m-1">ferrari</a>
                <a href="{{ url('showbmw') }}" class="btn btn-outline-danger border m-1">bmw</a>
                <a href="{{ url('showtoyota') }}" class="btn btn-outline-danger border m-1">toyota</a>
                <a href="{{ url('showchevrolet') }}" class="btn btn-outline-danger border m-1">chevrolet</a>
                <a href="{{ url('showhsbc') }}" class="btn btn-outline-danger border m-1">HSBC</a>
                <a href="{{ url('showaudi') }}" class="btn btn-outline-danger border m-1">AUDI</a>
            </div>
            @if(session('Cars'))
                <div class="alert alert-success">
                    @foreach(session('Cars') as $result)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="single-featured-cars">
                                    <div class="featured-img-box">
                                        <div class="featured-cars-img">
                                            <img src="carimages/{{ $result->car_image }}" alt="cars">
                                        </div>
                                        <div class="featured-model-info">
                                            <p>
                                                model: {{ $result->car_model }}
                                                <span class="featured-mi-span"> {{ $result->mileage }} mi</span>
                                                {{ $result->transmission }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="featured-cars-txt">
                                        <h2><a>{{ $result->car_make }} {{ $result->body_type }}</a></h2>
                                        <h3>$ {{ $result->price }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                </div>
            @else
                <div class="alert alert-success">
                    <h3>no cars of this make we have</h3>
                </div>
            @endif
        </div>
    </section>
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <p><h2>Available cars</h2></p>
            <div class="featured-cars-content">
                <div class="row">
                    @foreach ($cars as $car)    
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-featured-cars">
                                <div class="featured-img-box">
                                    <div class="featured-cars-img">
                                        <img src="carimages/{{ $car->car_image }}" alt="cars">
                                    </div>
                                    <div class="featured-model-info">
                                        <p>
                                            model: {{ $car->car_model }}
                                            <span class="featured-mi-span"> {{ $car->mileage }} mi</span>
                                            {{ $car->transmission }}
                                        </p>
                                    </div>
                                </div>
                                <div class="featured-cars-txt">
                                    <h2><a>{{ $car->car_make }} {{ $car->body_type }}</a></h2>
                                    <h3>$ {{ $car->price }}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--/.container-->

    </section>
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <p><h2>View your garage </h2></p>
            <div class="featured-cars-content">
                
            </div>
        </div>
        <!--/.container-->

    </section>
   
    
@include('Front.home.include.footer')