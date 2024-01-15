@include('Front.users.manager.hr.include.header') 
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    @include('Front.users.manager.hr.include.sidebar')
    <div class="body-wrapper">
        @include('Front.users.manager.hr.include.navbar') 
        <div class="container-fluid">
            <div class="row pt-3">
                <div class="col-md-4 mb-3">
                    <div class="card card-body bg-success p-3">
                        <p class="text-sm mb-0 text-capitaleze font-weight-bold">All Workers had</p>
                        <hr>
                        <h5 class="font-weight-bold mb-0">
                            {{ $totalUsers }}
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-body bg-warning p-3">
                        <p class="text-sm mb-0 text-capitaleze font-weight-bold">Current Workers</p>
                        <hr>
                        <h5 class="font-weight-bold mb-0">
                            {{ $currentWorkers }}
                        </h5>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-body bg-primary p-3">
                        <p class="text-sm mb-0 text-capitaleze font-weight-bold">Previous Workers</p>
                        <hr>
                        <h5 class="font-weight-bold mb-0">
                            {{ $previousWorkers }}
                        </h5>
                    </div>
                </div>
            </div>
            <h4>Workers list</h4>
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Names</th>
                        <th>Title</th>
                        <th>Contact</th>
                        <th>Image</th>
                        <th>PIN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->title }}</td>
                            <td>{{ $user->phone }}</td>
                            <td><img  src="usersImages/{{ $user->image}}" class="rounded"
                                    style="height: 90px; width: 90px;" alt="..." /></td>
                            <td>{{ $user->PIN }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-success m-1">Edit</button>
                                <button type="button" class="btn btn-outline-danger m-1">Remove</button>
                            </td>
                        </tr>
                    @endforeach
                        
                </tbody>
            </table>
        </div>
    </div>
</div>
@include('Front.users.manager.hr.include.footer')