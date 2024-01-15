<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blaise Motors</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('hr/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('hr/assets/css/styles.min.css') }}" />
</head>

<body>
    <div>
        <a href="{{ url('/') }}" class="btn btn-success float-end">back</a>
        <h4 class="text-center">Available Cars for sale</h4>
    </div>
    <main>
        <h2 id="results-heading"></h2>
        <ul id="results-list"></ul>
    </main>
    <section id="featured-cars" class="featured-cars">
        <div class="container">
            <div class="section-header">
                <h2>featured cars</h2>
            </div>
            <div class="featured-cars-content">
                <div class="row">
                    @foreach ($cars as $cars)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-featured-cars">
                                <div class="featured-img-box">
                                    <div class="featured-cars-img">
                                        <img style="width:200px; height:100px" src="carimages/{{ $cars->car_image }}" alt="cars">
                                    </div>
                                    <div class="featured-model-info">
                                        <p>
                                            model: {{ $cars->car_model }}
                                            <span class="featured-mi-span"> {{ $cars->mileage }} mi</span>
                                            {{ $cars->transmission }}
                                        </p>
                                    </div>
                                </div>
                                <div class="featured-cars-txt">
                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <button type="button" class=" border-0 bg-body-emphasis">
                                            <h4>{{ $cars->car_make }} {{ $cars->body_type }}</h4>
                                        </button>
                                    </a>
                                    <div class="col-sm-6 dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                        aria-labelledby="drop2">
                                        <div class=" message-body">
                                            <form class=" p-4" action="" method="post">
                                                <h4 class="text-center">Order this car</h4>
                                                <div class="row  mt-5 inp-bright">
                                                    <div class="col-12 col-sm-6 py-2 fadeInLeft">
                                                        <label>Names</label>
                                                        <input style="color:#b5b0b2;" name="order_name"
                                                            class="form-control">
                                                    </div>
                                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                        <label>Phone</label>
                                                        <input style="color:#b5b0b2;" type="orderNo" class="form-control"
                                                            name="">
                                                    </div>

                                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                        <label>Payment mode</label>
                                                        <select style="color:#b5b0b2;" class="form-control"
                                                            name="patment_mode">
                                                            <option value="">select</option>
                                                            <option value="cash">Cash</option>
                                                            <option value="bank">Bank</option>
                                                            <option value="online">Online</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                        <label>Delivery place</label>
                                                        <input style="color:#b5b0b2;" type="orderNo" class="form-control"
                                                            name="">
                                                    </div>

                                                    <div class="col-12 col-sm-2 py-2 wow fadeInRight">
                                                        <div class="float-lg-right text-bold">
                                                            <button type="button" class="btn btn-info m-1">Forward</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <h3>$ {{ $cars->price }}</h3>
                                    <p>
                                        {{ $cars->description }}
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



    <script src="{{ asset('hr/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('hr/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('hr/assets/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('hr/assets/js/app.min.js') }}"></script>
    <script src="{{ asset('hr/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>

</html>