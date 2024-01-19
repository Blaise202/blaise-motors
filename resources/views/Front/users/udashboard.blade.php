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
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <div class="section-header">
                <p>checkout <span>the</span> featured cars</p>
                <h2>featured cars</h2>
            </div>
            <button class="welcome-btn" onclick="window.location.href='{{ url('BuyACar') }}'">Buy One</button>
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
                                    <h3>{{ $car->price }}</h3>
                                    <p>
                                        {{ $car->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--/.container-->

    </section>
   
    
@include('Front.home.include.footer')