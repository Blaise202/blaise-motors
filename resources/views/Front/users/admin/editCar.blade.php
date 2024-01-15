@include('Front.users.admin.include.header')
<div class="container-scroller">
    @include('Front.users.admin.include.sidebar')
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar')
        <div class="main-panel">
            <div class="content-wrapper">
                <section>
                    <div class="container">
                        <form action="{{ url('updateCar', $car->id) }} " method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mt-5 inp-bright">
                                <div class="col-12 col-sm-4 py-2 fadeInLeft">
                                    <label>Car Make</label>
                                    <input style="color:#b5b0b2;" name="car_make" class="form-control" value="{{ $car->car_make }}">
                                </div>
                                <div class="col-12 col-sm-4 py-2 fadeInRight">
                                    <label>Car Model</label>
                                    <input style="color:#b5b0b2;" class="form-control" name="car_model" value="{{ $car->car_model }}">
                                </div>
                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                    <label>Body Type</label>
                                    <input style="color:#b5b0b2;" class="form-control" name="body_type" value="{{ $car->body_type }}">
                                </div>
                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                    <label>Transmission</label>
                                    <select style="color:#b5b0b2;" class="form-control" name="transmission">
                                        <option>{{ $car->transmission }}</option>
                                        <option>Automatic</option>
                                        <option>Manual</option>
                                        <option>Semi-Automatic</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                    <label>Mileage</label>
                                    <input style="color:#b5b0b2;" class="form-control" name="mileage" value="{{ $car->mileage }}">
                                </div>
                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                    <label>VIN</label>
                                    <input style="color:#b5b0b2;" type="number" class="form-control" name="VIN" value="{{ $car->VIN }}">
                                </div>
                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                    <label>Price</label>
                                    <input style="color:#b5b0b2;" type="text" class="form-control" name="price" value="{{ $car->price }}">
                                </div>
                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                    <label>Number</label>
                                    <input style="color:#b5b0b2;" type="number" name="number" class="form-control" value="{{ $car->number }}" >
                                </div>
                                <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                    <label>Car Image</label>
                                    <input style="color:#b5b0b2;" type="file" name="car_image" class="form-control"/>
                                    <img src="carimages/{{ $car->car_image }}" alt="img">
                                </div>
                                
                                <div class="col-12 col-sm-12 py-2 wow fadeInRight ">
                                    <label>Overall Description</label>
                                    <textarea style="color:#b5b0b2;" class="form-control" style="height: 100px;"
                                        name="overall_description">{{ $car->description }}</textarea>
                                </div>
                                <div class="col-12 col-sm-2 py-2 wow fadeInRight">
                                    <div class="float-lg-right text-bold">
                                        <button type="submit" class="nav-link btn btn-success create-new-button" aria-expanded="false">Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            @include('Front.users.admin.include.footer')