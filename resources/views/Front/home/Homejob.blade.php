<!doctype html>
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
        <h4 class="text-center">Pending Job Posts</h4>
    </div>
    <br>
    <div class="d-flex">
        @foreach ($data as $data)
            <div class="col-md-6 grid-margin stretch-card p-1 ">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{ $data->job_title }}</h4>
                        <p class="card-description">Job Location</p>
                        <div class="row">
                            <div class="col-md-6">
                                <address>
                                    <p class="font-weight-bold">{{ $data->locations }}</p>
                                    {{-- <p> 695 KN Ave, </p>
                                    <p> Nyamirambo </p> --}}
                                </address>
                            </div>
                            <div class="col-md-6">
                                <address class="text-primary">
                                    <p class="font-weight-bold"><u>Deadlines</u> </p>
                                    <div class="d-flex">
                                        <p class="mb-2">{{ $data->deadlines }} /</p>
                                        <p class="text-danger">{{ $timeSpent }} days left to apply</p> 
                                    </div>
                                    <p class="font-weight-bold"> Web Address </p>
                                    <p> www.Blaisemotors.com </p>
                                </address>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title"><u>Job Description</u></h4>
                        <p class="lead"> {{ $data->job_description }}</p>
                        <h4 class="card-title"><u>Minimum Qualifications</u></h4>
                        <ol class="lead">
                            <p style="width: 260px">{{ $data->qualification }}</p>
                        </ol>
                        <div class="float-end">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <button type="button" class="btn btn-primary m-1"><b>Apply Now</b></button>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <form class="p-4" action="" method="post">
                                        <div class="row mt-5 inp-bright">
                                            <div class="col-12 col-sm-6 py-2 fadeInLeft">
                                                <label>Names</label>
                                                <input style="color:#b5b0b2;" name="" class="form-control">
                                            </div>

                                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                <label>Email</label>
                                                <input style="color:#b5b0b2;" class="form-control" name="">
                                            </div>
                                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                <label>Phone</label>
                                                <input style="color:#b5b0b2;" type="" class="form-control" name="">
                                            </div>

                                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                <label>Qualification met</label>
                                                <select style="color:#b5b0b2;" type="text" name="" class="form-control">
                                                    <option value="">Bachelor's degree in accounting.</option>
                                                    <option value="">Atleast one year of experience.</option>
                                                    <option value="">Recognised and legal certificate of finance.</option>
                                                </select>
                                            </div>
                                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                <label>Attach Qualification Proof</label>
                                                <input style="color:#b5b0b2;" type="file" name="" class="form-control">
                                            </div>
                                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                                <label>Application Letter</label>
                                                <input style="color:#b5b0b2;" type="file" name="" class="form-control">
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
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
<script src="{{ asset('hr/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('hr/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('hr/assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('hr/assets/js/app.min.js') }}"></script>
<script src="{{ asset('hr/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('hr/assets/libs/simplebar/dist/simplebar.js') }}"></script>
<script src="{{ asset('hr/assets/js/dashboard.js') }}"></script>


</html>