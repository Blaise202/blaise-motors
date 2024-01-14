@include('Front.users.manager.hr.include.header') 
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('Front.users.manager.hr.include.sidebar')
    <div class="body-wrapper">
        @include('Front.users.manager.hr.include.navbar') 
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <a class="nav-link nav-icon-hover" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <button type="button" class="btn btn-success m-1">Post a job</button>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up">
                        <div class="message-body">
                            <form class="p-4" action="{{ url('postAJob') }}" method="post">
                                <div class="row mt-5 inp-bright">
                                    @csrf
                                    <div class="col-12 col-sm-8 py-2 fadeInLeft">
                                        <label>Job title</label>
                                        <input style="color:#b5b0b2;" name="job_title" class="form-control">
                                    </div>

                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight ">
                                        <label>Job Description</label>
                                        <textarea style="color:#b5b0b2;" class="form-control" style="height: 100px;"
                                            name="job_description"></textarea>
                                    </div>
                                    <div class="col-12 col-sm-6 py-2 wow fadeInRight ">
                                        <label>Qualifications</label>
                                        <textarea style="color:#b5b0b2;" class="form-control" style="height: 100px;"
                                            name="qualification"></textarea>
                                    </div>

                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>Location</label>
                                        <input style="color:#b5b0b2;" class="form-control" name="location">
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>Deadline</label>
                                        <input style="color:#b5b0b2;" type="date" class="form-control" name="deadlines">
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>Opportunities</label>
                                        <input style="color:#b5b0b2;" type="text" name="opportunities" class="form-control">
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>Contact</label>
                                        <input style="color:#b5b0b2;" type="text" name="phone" class="form-control">
                                    </div>
                                    <div class="col-12 col-sm-2 py-2 wow fadeInRight">
                                        <div class="float-lg-right text-bold">
                                            <button type="submit" class="btn btn-info m-1">Forward</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <h4>Pending Job Posts</h4>
                    <div class="d-flex">
                        @if($data)
                            @foreach ($data as $data)    
                                <div class="col-md-6 grid-margin stretch-card p-1">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $data->job_title }}</h4>
                                            <p class="card-description">Job Location</p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <address>
                                                        <p style="width:100px" class="font-weight-bold">{{ $data->locations }}</p>
                                                    </address>
                                                </div>
                                                <div class="col-md-6">
                                                    <address class="text-primary">
                                                        <p class="font-weight-bold"><u>Deadlines</u> </p>
                                                        <p class="mb-2"> {{ $data->deadlines }} </p>
                                                        <p class="font-weight-bold"> Web Address </p>
                                                        <p> www.Blaisemotors.com </p>
                                                    </address>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 class="card-title">Job Description</h4>
                                            </p>
                                            <p class="lead">{{$data->job_description}}</p>
                                            <div class="d-flex float-end">
                                                <div>
                                                    <button type="button" class="btn btn-danger float-left m-1">Remove
                                                        Post</button>
                                                </div>
                                                <div class="float-end">
                                                    <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <button type="button" class="btn btn-success m-1 float-end">View
                                                            Applicants</button>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                                        aria-labelledby="drop2">
                                                        <div class="message-body">
                                                            <form class="p-1" action="" method="post">
                                                                <div class="row inp-bright">
                                                                    <button type="button" class="btn btn-outline-link ">1.
                                                                        Niyonkuru
                                                                        Peter</button>
                                                                    <button type="button" class="btn btn-outline-link ">2.
                                                                        Akayezu
                                                                        Jeremy</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="col-md-6 grid-margin stretch-card p-1">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>No job posts available now</h4>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <hr>
                    <h4>Schedured Interviews</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('hr/assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('hr/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('hr/assets/js/sidebarmenu.js') }}"></script>
<script src="{{ asset('hr/assets/js/app.min.js') }}"></script>
<script src="{{ asset('hr/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
</body>

</html>