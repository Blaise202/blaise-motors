@include('Front.users.admin.include.header')
<div class="container-scroller">
    @include('Front.users.admin.include.sidebar')  ?>
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar') ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <section>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">$1234</h3>
                                            <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success ">
                                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Potential growth</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">$120000</h3>
                                            <p class="text-success ms-2 mb-0 font-weight-medium">+11%</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success">
                                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Current revenue</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">$7234</h3>
                                            <p class="text-danger ms-2 mb-0 font-weight-medium">-2.4%</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-danger">
                                            <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Monthly Income</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="d-flex align-items-center align-self-start">
                                            <h3 class="mb-0">$353</h3>
                                            <p class="text-success ms-2 mb-0 font-weight-medium">+3.5%</p>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="icon icon-box-success ">
                                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-muted font-weight-normal">Current Expenses</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Transaction History</h4>
                                <canvas id="transaction-history" class="transaction-chart"></canvas>
                                <div
                                    class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                    <div class="text-md-center text-xl-left">
                                        <h6 class="mb-1">Transfer to Mo_Mo</h6>
                                        <p class="text-muted mb-0">07 Dec 2023, 09:12AM</p>
                                    </div>
                                    <div
                                        class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                        <h6 class="font-weight-bold mb-0">$236</h6>
                                    </div>
                                </div>
                                <div
                                    class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                    <div class="text-md-center text-xl-left">
                                        <h6 class="mb-1">Tranfer to Bank</h6>
                                        <p class="text-muted mb-0">07 Dec 2023, 09:12AM</p>
                                    </div>
                                    <div
                                        class="align-self-center flex-grow text-right text-md-center text-xl-right py-md-2 py-xl-0">
                                        <h6 class="font-weight-bold mb-0">$593</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row justify-content-between">
                                    <h4 class="card-title mb-1">Ongoing Actions</h4>
                                    <p class="text-muted mb-1">Status</p>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="preview-list">
                                            <div class="preview-item border-bottom">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-primary">
                                                        <i class="mdi mdi-file-document"></i>
                                                    </div>
                                                </div>
                                                <div class="preview-item-content d-sm-flex flex-grow">
                                                    <div class="flex-grow">
                                                        <h6 class="preview-subject">Tax Payments</h6>
                                                        <p class="text-muted mb-0">For four previous sales</p>
                                                    </div>
                                                    <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                        <p class="text-muted">15 hours ago</p>
                                                        <p class="text-muted mb-0">4 tasks, 1 issue </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="preview-item border-bottom">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-success">
                                                        <i class="mdi mdi-cloud-download"></i>
                                                    </div>
                                                </div>
                                                <div class="preview-item-content d-sm-flex flex-grow">
                                                    <div class="flex-grow">
                                                        <h6 class="preview-subject">Opening Nyarugenge blanch</h6>
                                                        <p class="text-muted mb-0">Registering new agencies</p>
                                                    </div>
                                                    <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                        <p class="text-muted">4 days ago</p>
                                                        <p class="text-muted mb-0">1 task, 5 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="preview-item border-bottom">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-info">
                                                        <i class="mdi mdi-clock"></i>
                                                    </div>
                                                </div>
                                                <div class="preview-item-content d-sm-flex flex-grow">
                                                    <div class="flex-grow">
                                                        <h6 class="preview-subject">Project meeting</h6>
                                                        <p class="text-muted mb-0">Franchisees presentation</p>
                                                    </div>
                                                    <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                        <p class="text-muted">17 minutes ago</p>
                                                        <p class="text-muted mb-0">1 tasks, 2 issues</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="preview-item border-bottom">
                                                <div class="preview-thumbnail">
                                                    <div class="preview-icon bg-danger">
                                                        <i class="mdi mdi-email-open"></i>
                                                    </div>
                                                </div>
                                                <div class="preview-item-content d-sm-flex flex-grow">
                                                    <div class="flex-grow">
                                                        <h6 class="preview-subject">Broadcast Mail</h6>
                                                        <p class="text-muted mb-0">Send release details to team</p>
                                                    </div>
                                                    <div class="me-auto text-sm-right pt-2 pt-sm-0">
                                                        <p class="text-muted">55 minutes ago</p>
                                                        <p class="text-muted mb-0">35 tasks, 7 issues </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Revenue</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">$32123</h2>
                                            <p class="text-success ms-2 mb-0 font-weight-medium">
                                                +3.5%
                                            </p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">
                                            11.38% Since last month
                                        </h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-codepen text-primary ms-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Sales</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">$45850</h2>
                                            <p class="text-success ms-2 mb-0 font-weight-medium">
                                                +8.3%
                                            </p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">
                                            9.61% Since last month
                                        </h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-wallet-travel text-danger ms-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h5>Purchase</h5>
                                <div class="row">
                                    <div class="col-8 col-sm-12 col-xl-8 my-auto">
                                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                                            <h2 class="mb-0">$2039</h2>
                                            <p class="text-danger ms-2 mb-0 font-weight-medium">
                                                -2.1%
                                            </p>
                                        </div>
                                        <h6 class="text-muted font-weight-normal">
                                            2.27% Since last month
                                        </h6>
                                    </div>
                                    <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                                        <i class="icon-lg mdi mdi-monitor text-success ms-auto"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('Front.users.admin.include.footer')
    </div>
</div>