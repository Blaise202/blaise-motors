
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
                    <div class="new-cars-item">
                        <div class="single-new-cars-item">
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <div class="new-cars-img">
                                        <img src="assets/images/new-cars-model/ncm1.png" alt="img" />
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="new-cars-txt">
                                        <h2><a href="#">chevrolet camaro <span> ZL1 1LE</span></a></h2>
                                        <p>
                                            The Chevrolet Camaro ZL1 1LE is the fastest Camaro
                                            model. The Chevrolet Camaro ZL1 1LE takes ZL1's engine
                                            and combines it with reduced weight, enhanced bodywork,
                                            and upgraded parts like the supercharger and suspension.
                                        </p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-cars-item">
                        <div class="single-new-cars-item">
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <div class="new-cars-img">
                                        <img src="assets/images/new-cars-model/ncm2.png" alt="img" />
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="new-cars-txt">
                                        <h2><a href="#">BMW series-3 wagon</a></h2>
                                        <p>
                                            Overview. BMW's only wagon for the States comes in the
                                            form of the competent, practical, and stylish 3-series
                                            Sports Wagon. Act fast, though, as the 3-series wagon
                                            will disappear from the U.S. market after the 2019 model
                                            year.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="new-cars-item">
                        <div class="single-new-cars-item">
                            <div class="row">
                                <div class="col-md-7 col-sm-12">
                                    <div class="new-cars-img">
                                        <img src="assets/images/new-cars-model/ncm3.png" alt="img" />
                                    </div>
                                    <!--/.new-cars-img-->
                                </div>
                                <div class="col-md-5 col-sm-12">
                                    <div class="new-cars-txt">
                                        <h2><a href="#">ferrari 488 superfast</a></h2>
                                        <p>
                                            Yet Ferrari want everyone to believe the 812 is as fast
                                            as 488 Pista. Simply because it sits higher in the model
                                            range. Ferrari's Fiorano lap times are selected by their
                                            marketing department.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc1.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a>BMW 6-series gran coupe</a></h2>
                                <h3>$89,395</h3>
                                <p>
                                    Luxury meets performance in a sleek four-door design,
                                    boasting advanced tech and dynamic driving for enthusiasts.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc2.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a>chevrolet camaro <span>wmv20</span></a></h2>
                                <h3>$66,575</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc3.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a>lamborghini <span>v520</span></a></h2>
                                <h3>$125,250</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc4.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a>audi <span> a3</span> sedan</a></h2>
                                <h3>$95,500</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc4.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a>infiniti <span>z5</span></a></h2>
                                <h3>$36,850</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc5.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a>porsche <span>718</span> cayman</a></h2>
                                <h3>$48,500</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc7.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a><span>bmw 8-</span>series coupe</a></h2>
                                <h3>$56,000</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-featured-cars">
                            <div class="featured-img-box">
                                <div class="featured-cars-img">
                                    <img src="assets/images/featured-cars/fc8.png" alt="cars">
                                </div>
                                <div class="featured-model-info">
                                    <p>
                                        model: 2017
                                        <span class="featured-mi-span"> 3100 mi</span>
                                        <span class="featured-hp-span"> 240HP</span>
                                        automatic
                                    </p>
                                </div>
                            </div>
                            <div class="featured-cars-txt">
                                <h2><a>BMW <span> x</span>series-6</a></h2>
                                <h3>$75,800</h3>
                                <p>
                                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit, sed quia non.
                                </p>
                            </div>
                        </div>
                    </div>
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
    <footer id="contact" class="contact">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href="{{ url('/') }}">BlaiseMotors</a>
                            </div>
                            <p>
                                Ased do eiusm tempor incidi ut labore et dolore magnaian aliqua. Ut enim ad minim
                                veniam.
                            </p>
                            <div class="footer-contact">
                                <p>info@blaisemotors.com</p>
                                <p>+250 78899483</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6">
                        <div class="single-footer-widget">
                            <h2>about devloon</h2>
                            <ul>
                                <li><a href="{{ url('aboutUs') }}">about us</a></li>
                                <li><a href="{{ url('Homejob') }}">career(job opportunities)</a></li>
                                <li>
                                    <a class="shadow" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <button type="button" class="">Rate us</button>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="drop2">
                                        <div class="message-body">
                                            <form style="width:12cm" class="p-4" action="" method="post">
                                                <div class="row mt-5 inp-bright">
                                                    <div class="col-12 col-sm-4 py-2 fadeInLeft">
                                                        <label>Names</label>
                                                        <input style="color:#b5b0b2;" name="commenter_name"
                                                            class="form-control">
                                                    </div>

                                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                                        <label>Email</label>
                                                        <input style="color:#b5b0b2;" class="form-control"
                                                            name="commenter_email">
                                                    </div>
                                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                                        <label>Phone</label>
                                                        <input style="color:#b5b0b2;" type="" class="form-control"
                                                            name="commenter_phone">
                                                    </div>
                                                    <div class="col-12 col-sm-8 py-2 wow fadeInRight">
                                                        <label>Your Message</label>
                                                        <textarea style="color:#b5b0b2;" type="" class="form-control"
                                                            name="commenter_message"></textarea>
                                                    </div>
                                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                                        <label>image(optional)</label>
                                                        <input style="color:#b5b0b2;" type="file" class="form-control"
                                                            name="commenter_image">
                                                    </div>
                                                    <div class="col-12 col-sm-2 py-2 wow fadeInRight">
                                                        <div class="float-lg-right text-bold">
                                                            <button type="button" class="btn btn-info m-1">Send</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12">
                        <div class="single-footer-widget">
                            <h2>top brands sites</h2>
                            <div class="row">
                                <div class="col-md-7 col-xs-6">
                                    <ul>
                                        <li><a href="https://www.bmw.com">BMW</a></li>
                                        <li><a href="https://www.lamborghini.com">lamborghini</a></li>
                                        <li><a href="https://www.chevrolet.com/performance/camaro">camaro</a></li>
                                        <li><a href="https://www.audi.com/en.html">audi</a></li>
                                        <li><a href="https://www.infinitiusa.com/">infiniti</a></li>
                                        <li><a href="https://www.nissanusa.com/">nissan</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-5 col-xs-6">
                                    <ul>
                                        <li><a href="https://www.ferrari.com">ferrari</a></li>
                                        <li><a href="https://www.porsche.com/usa/">porsche</a></li>
                                        <li><a href="https://www.landrover.com">land rover</a></li>
                                        <li><a href="https://www.astonmartin.com/en/">aston martin</a></li>
                                        <li><a href="https://www.mercedes-benz.com/en/">mersedes</a></li>
                                        <li><a href="https://www.opel.com/">opel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-offset-1 col-md-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h2>news letter</h2>
                            <div class="footer-newsletter">
                                <p>
                                    Subscribe to get latest news update and informations
                                </p>
                            </div>
                            <div class="hm-foot-email">
                                <form action="{{ url('saveEmail') }}" method="POST">
                                    <div class="foot-email-box">
                                        <label for="name"></label>
                                        <input name="name" id="email" type="email" class="form-control"
                                            placeholder="Add Email">
                                    </div>
                                    <button type="submit" class="foot-email-subscribe">
                                        <span><i class="fa fa-arrow-right"></i></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-sm-6">
                        <p>
                            &copy; copyright.designed and developed by <a href="">Blaise
                                Izerimana</a>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
        </div>
    </footer>
@include('Front.home.include.footer')