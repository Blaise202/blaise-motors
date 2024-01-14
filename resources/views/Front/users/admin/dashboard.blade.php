@include('Front.users.admin.include.header')
<div class="container-scroller">
    @include('Front.users.admin.include.sidebar')
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row pt-3">
                    <div class="col-md-4 mb-3">
                        <div class="card card-body bg-success p-3">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">All Cars</p>
                            <hr>
                            <h5 class="font-weight-bold mb-0">
                                {{ $totalCars }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-body bg-info p-3">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">All workers</p>
                            <hr>
                            <h5 class="font-weight-bold mb-0">
                                {{ $totalWorkers }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-body bg-warning p-3">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Available Cars</p>
                            <hr>
                            <h5 class="font-weight-bold mb-0">
                                {{ $carsAvailable }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-body bg-danger p-3">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Pending Orders</p>
                            <hr>
                            <h5 class="font-weight-bold mb-0">
                                {{ $pendingOrders }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-body bg-primary p-3">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Completed Orders</p>
                            <hr>
                            <h5 class="font-weight-bold mb-0">
                                {{ $completedOrders }}
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card card-body bg-secondary p-3">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Registered Customers</p>
                            <hr>
                            <h5 class="font-weight-bold mb-0">
                                {{ $registeredCustomers }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            @include('Front.users.admin.include.footer') ?>
        </div>
    </div>