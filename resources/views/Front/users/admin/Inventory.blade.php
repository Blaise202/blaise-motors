@include('Front.users.admin.include.header')
<div class="container-scroller">
    @include('Front.users.admin.include.sidebar') 
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div style="height:550px" class="fixed-size-container">
                    <section class="mb-3">
                        <table class="table table-dark wrap rounded-1 ">
                            <tr>
                                <h4 class="text-center">All Stored Data</h4>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Title</td>
                                <td>Email</td>
                                <td>Phone</td>
                                <td>Image</td>
                            </tr>
                                @foreach($user as $user)
                                    <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->title }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td><img style="width: 100px; height:100px"src="usersImages/{{ $user->image }}" alt="user" /></td>
                                    </tr>
                                @endforeach
                        </table>
                    </section>
                    <section class="mb-3">
                        <table class="table table-dark wrap rounded-1 ">
                            <tr>
                                <h4 class="text-center">All Stored Data</h4>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Year</td>
                                <td>Description</td>
                                <td>Image</td>
                            </tr>
                                @foreach($car as $car)
                                    <tr>
                                        <td>{{ $car->car_make }} {{ $car->body_type }}</td>
                                        <td>{{ $car->price }}</td>
                                        <td>{{ $car->car_model }}</td>
                                        <td style="max-width: 200px; word-wrap: break-word;" >
                                            {{ $car->description }}
                                        </td>
                                        <td><img style="width: 100px; height:100px"src="carimages/{{ $car->car_image }}" alt="cars" /></td>
                                        
                                    </tr>
                                @endforeach
                        </table>
                    </section>
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card ">
                          <div class="card corona-gradient-card">
                            <div class="card-body py-0 px-0 px-sm-3">
                                <h4 class="mb-1 p-1 text-center">By here you can  change every thing in the home page that require modification.</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    <h3 class="text-center"></h3>
                    <div class="d-flex">
                        <div class="col-md-6 grid-margin stretch-card p-1">
                            <div class="card  fixed-size-container">
                              <div class="card-body p-1">
                                <form action="{{ url('saveWelcomeText') }}" method="POST">
                                    @csrf
                                    <div class="col-12 col-sm-12 py-2 wow fadeInRight ">
                                        <label>Welcome Text</label>
                                        <textarea name="name" style="color:#b5b0b2;" class="form-control" style="height: 100px;"
                                         required></textarea>
                                    </div>
                                    <div class="col-12 col-sm-12 py-2 wow fadeInRight">
                                        <label>Type</label>
                                        <select style="color:#b5b0b2;" class="form-control" name="type">
                                            <option>Welcome text</option>
                                        </select>
                                    </div>
                                    <div class="float-lg-right text-bold ">
                                        <button type="submit" class="nav-link btn btn-success create-new-button" aria-expanded="false">Save
                                        </button>
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card p-1">
                            <div class="card  fixed-size-container">
                                <div class="card-body p-1">
                                    <h3>Current welcome text</h3>
                                    <p>
                                        @foreach ($text as $text)
                                            {{ ($text->name) }}
                                        @endforeach
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="col-md-6 grid-margin stretch-card p-1">
                            <div class="card  fixed-size-container">
                              <div class="card-body p-1">
                                <form action="{{ url('saveNewbrand') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 col-sm-12 py-2 wow fadeInRight ">
                                        <label>New Brand</label>
                                        <input type="file" name="image" style="color:#b5b0b2;" class="form-control" required />
                                    </div>
                                    <div class="col-12 col-sm-12 py-2 wow fadeInRight">
                                        <label>Type</label>
                                        <select style="color:#b5b0b2;" class="form-control" name="type" required>
                                            <option>Brand</option>
                                        </select>
                                    </div>
                                    <div class="float-lg-right text-bold ">
                                        <button type="submit" class="nav-link btn btn-success create-new-button" aria-expanded="false">Save
                                        </button>
                                    </div>
                                </form>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-6 grid-margin stretch-card p-1">
                            <div class="card  fixed-size-container">
                                <div class="card-body p-1">
                                    <h3>Saved Brands</h3>
                                    <div>
                                        @foreach ($brand as $brand)
                                            <img class="p-2" src="brand/{{ $brand->image }}" alt="img">
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('Front.users.admin.include.footer')
