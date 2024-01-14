@include('Front.users.admin.include.header')
<div class="container-scroller">
    @include('Front.users.admin.include.sidebar') 
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar')
        <div class="main-panel">
            <div class="content-wrapper">
                <section>

                </section>
                <section id="featured-cars" class="featured-cars">
                    <div class="container">
                        <div class="row">
                            <div class="d-flex">
                                <div class="col-12 col-sm-8 py-2 wow fadeInLeft">
                                    <h2 class="text-center"> Available Cars</h2>
                                </div>
                                <div class="float-lg-right text-bold m-l-1">
                                    <a class="nav-link btn btn-success create-new-button" aria-expanded="false"
                                        href="{{ url('AddNew') }}">+ Add New
                                    </a>
                                </div>
                                <div class="float-lg-right text-bold">
                                    <a class="nav-link btn btn-danger create-new-button" aria-expanded="false"
                                        href="{{ url('RemoveCar') }}">- Remove a car
                                    </a>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="featured-cars-content">
                            <div class="row">
                                @foreach($car as $cars)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="single-featured-cars">
                                        <div class="featured-img-box">
                                            <div class="featured-cars-img">
                                                <a href="{{ url('editCar', $cars->id) }}">
                                                    <img src="carimages/{{ $cars->car_image }}" alt="cars" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="featured-cars-txt">
                                            <h5><a>{{ $cars->car_make }} {{ $cars->body_type }}</a>
                                            </h5>
                                            <h3>{{ $cars->price }}</h3>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>     
                        </div>
                    </div>
                </section>
            </div>
        @include('Front.users.admin.include.footer')