@include('Front.users.admin.include.header')
<div class="container-scroller">
    @include('Front.users.admin.include.sidebar')  ?>
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar') ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Order Status</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Client Name</th>
                                                <th>Order No</th>
                                                <th>Cost</th>
                                                <th>Payment Mode</th>
                                                <th>Start Date</th>
                                                <th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img src="use/assets/images/faces/face1.jpg" alt="image" />
                                                    <span class="ps-2">Henry Klein</span>
                                                </td>
                                                <td>02312</td>
                                                <td>$14,500</td>
                                                <td>Credit card</td>
                                                <td>04 Dec 2019</td>
                                                <td>
                                                    <div class="badge badge-outline-success">
                                                        Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="use/assets/images/faces/face2.jpg" alt="image" />
                                                    <span class="ps-2">Estella Bryan</span>
                                                </td>
                                                <td>02312</td>
                                                <td>$14,500</td>
                                                <td>Cash on delivered</td>
                                                <td>04 Dec 2019</td>
                                                <td>
                                                    <div class="badge badge-outline-warning">
                                                        Pending
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="use/assets/images/faces/face5.jpg" alt="image" />
                                                    <span class="ps-2">Lucy Abbott</span>
                                                </td>
                                                <td>02312</td>
                                                <td>$14,500</td>
                                                <td>Credit card</td>
                                                <td>04 Dec 2019</td>
                                                <td>
                                                    <div class="badge badge-outline-danger">
                                                        Unsettled
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="use/assets/images/faces/face3.jpg" alt="image" />
                                                    <span class="ps-2">Peter Gill</span>
                                                </td>
                                                <td>02312</td>
                                                <td>$14,500</td>
                                                <td>Online Payment</td>
                                                <td>04 Dec 2019</td>
                                                <td>
                                                    <div class="badge badge-outline-success">
                                                        Completed
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="use/assets/images/faces/face4.jpg" alt="image" />
                                                    <span class="ps-2">Sallie Reyes</span>
                                                </td>
                                                <td>02312</td>
                                                <td>$14,500</td>
                                                <td>Credit card</td>
                                                <td>04 Dec 2019</td>
                                                <td>
                                                    <div class="badge badge-outline-success">
                                                        Completed
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @include('Front.users.admin.include.footer')
        </div>
    </div>
</div>