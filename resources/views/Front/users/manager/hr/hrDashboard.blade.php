@include('Front.users.manager.hr.include.header') 
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('Front.users.manager.hr.include.sidebar')
    <div class="body-wrapper">
        @include('Front.users.manager.hr.include.navbar') 
        <div class="container-fluid">
            <h3 class="text-center">Our Workers</h3>
            <hr>
            <div class="row">
                <h3>Head Office</h3>
                @foreach ($director as $director)
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href=""><img src="usersImages/{{ $director->image }}" class="card-img-top rounded-0" alt="." /></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">{{ $director->name }}</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">
                                        $500
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
                <h3>Pepartment Heads</h3>
                @foreach ($manager as $manager)    
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href=""><img src="usersImages/{{ $manager->image }}" class="card-img-top rounded-0" alt="." /></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">{{ $manager->name }}</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">
                                        $400
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
                <h3>Branch Rulers</h3>
                @foreach ($seller as $seller)
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href=" "><img src="usersImages/{{ $seller->image }}" class="card-img-top rounded-0" alt="..." /></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">{{ $seller->name }}</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">
                                        $150
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
                <h3>Distributers</h3>
                @foreach ($distributer as $distributer)
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href=""><img src="usersImages/{{ $distributer->image }}" class="card-img-top rounded-0" alt="..." /></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">{{ $distributer->name }}</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">
                                        $650
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <hr>
                <h3>Other Workers</h3>
                @foreach ($tech as $tech)    
                    <div class="col-sm-6 col-xl-3">
                        <div class="card overflow-hidden rounded-2">
                            <div class="position-relative">
                                <a href=""><img src="usersImages/{{ $tech->image }}" class="card-img-top rounded-0" alt="..." /></a>
                            </div>
                            <div class="card-body pt-3 p-4">
                                <h6 class="fw-semibold fs-4">{{ $tech->name }}</h6>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="fw-semibold fs-4 mb-0">
                                        $650
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@include('Front.users.manager.hr.include.footer')