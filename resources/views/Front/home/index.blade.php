
@include('Front.home.include.header')
</head>

<body>
    <section id="home" class="welcome-hero">
        <div class="top-area">
            <div class="header-area">
                <nav class="navbar navbar-default bootsnav  navbar-sticky navbar-scrollspy"
                    data-minus-value-desktop="70" data-minus-value-mobile="55" data-speed="1000">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#navbar-menu">
                                <i class="fa fa-bars"></i>
                            </button>
                            <a class="navbar-brand">BlaiseMotors<span></span></a>
                        </div>
                        <div class="collapse navbar-collapse menu-ui-design" id="navbar-menu">
                            <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                                <li class=" scroll active"><a href="#home">home</a></li>
                                <li class="scroll"><a href="#service">service</a></li>
                                <li class="scroll"><a href="#featured-cars">featured cars</a></li>
                                <li class="scroll"><a href="#new-cars">new cars</a></li>
                                <li class="scroll"><a href="#brand">brands</a></li>
                                <li class="scroll"><a href="#contact">contact</a></li>
                                <li class=""><a href="{{ url('showLoginForm') }}">Log In</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="container">
            <div class="welcome-hero-txt">
                <h2>get your desired car in resonable price</h2>
                <p>
                    @foreach($text as $text)
                        {{ ($text->name) }}
                    @endforeach
                </p>
                <button class="welcome-btn" onclick="window.location.href='{{ url('BuyACar') }}'">Order a Car</button>
            </div>
        </div>
    </section>
    <section id="service" class="service">
        <div class="container">
            <div class="service-content">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car"></i>
                            </div>
                            <h2><a href="#">Exprole more about <span> our</span> cars</a></h2>
                            <p>
                                Get used to our cars and we will help you know your best
                                choice that mathches your desire and wallet.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car-repair"></i>
                            </div>
                            <h2><a href="#">Shipping Procedures</a></h2>
                            <p>
                                Understand well our ways of transportation and be aware of the best way affordable to
                                you.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-service-item">
                            <div class="single-service-icon">
                                <i class="flaticon-car-1"></i>
                            </div>
                            <h2><a href="#">insurence support</a></h2>
                            <p>
                                Be aware of your rights to be guaranted in case of any issues that may hinder the
                                wellbeing of your car.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="new-cars" class="new-cars">
        <div class="container">
            <div class="section-header">
                <p>checkout <span>the</span> latest cars</p>
                <h2>newest cars</h2>
            </div>
            <div class="new-cars-content">
                <div class="owl-carousel owl-theme" id="new-cars-carousel">
                    @foreach ($newCar as $newCar)    
                        <div class="new-cars-item">
                            <div class="single-new-cars-item">
                                <div class="row">
                                    <div class="col-md-7 col-sm-12">
                                        <div class="new-cars-img">
                                            <img src="carimages/{{ $newCar->car_image }}" alt="img" />
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-12">
                                        <div class="new-cars-txt">
                                            <h2><a href="#">{{ $newCar->car_make }} <span> {{ $newCar->bodt_type }}</span></a></h2>
                                            <p>
                                                {{ $newCar->description }}
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
    <section id="clients-say" class="clients-say">
        <div class="container">
            <div class="section-header">
                <h2>what our clients say</h2>
            </div>
            <div class="row">
                <div class="owl-carousel testimonial-carousel">
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c1.png" alt="image of clients person" />
                                    </div>
                                </div>
                                <div class="testimonial-comment">
                                    <p>
                                        Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan
                                        rem aperiam, eaque ipsa quae ab illo inventore verit.
                                    </p>
                                </div>
                                <div class="testimonial-person">
                                    <h2><a href="#">tomas lili</a></h2>
                                    <h4>new york</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c2.png" alt="image of clients person" />
                                    </div>
                                </div>
                                <div class="testimonial-comment">
                                    <p>
                                        Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan
                                        rem aperiam, eaque ipsa quae ab illo inventore verit.
                                    </p>
                                </div>
                                <div class="testimonial-person">
                                    <h2><a href="#">romi rain</a></h2>
                                    <h4>london</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="single-testimonial-box">
                            <div class="testimonial-description">
                                <div class="testimonial-info">
                                    <div class="testimonial-img">
                                        <img src="assets/images/clients/c3.png" alt="image of clients person" />
                                    </div>
                                </div>
                                <div class="testimonial-comment">
                                    <p>
                                        Sed ut pers unde omnis iste natus error sit voluptatem accusantium dolor laudan
                                        rem aperiam, eaque ipsa quae ab illo inventore verit.
                                    </p>
                                </div>
                                <div class="testimonial-person">
                                    <h2><a href="#">john doe</a></h2>
                                    <h4>washington</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="brand" class="brand">
        <div class="container">
            <div class="brand-area">
                <div class="owl-carousel owl-theme brand-item">
                    @foreach ($brand as $brand)
                        <div class="item">
                            <img src="brand/{{ $brand->image }}" alt="img">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@include('Front.home.include.footer')