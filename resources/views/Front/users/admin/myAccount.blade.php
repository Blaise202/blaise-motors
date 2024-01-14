@include('Front.users.admin.include.header')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar')
        <div class="main-panel">
            <div class="content-wrapper"> 
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-5 inp-bright">
                            <form action="{{ url('updateAccount', $user->id) }} " method="post" enctype="multipart/form-data">
                                <div class="row mt-5 inp-bright">
                                    @csrf
                                    <div class="col-12 col-sm-4 py-2 fadeInLeft">
                                        <label>Name(Can't change)</label>
                                        <input style="color:#b5b0b2;"  class="form-control" placeholder="{{ $user->name }}">
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 fadeInRight">
                                        <label>Email(Can't change)</label>
                                        <input style="color:#b5b0b2;" class="form-control" placeholder="{{ $user->email }}">
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>gender</label>
                                        <select style="color:#b5b0b2;" class="form-control" name="gender">
                                            <option>{{ $user->gender }}</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>Title(can't Change)</label>
                                        <input style="color:#b5b0b2;" class="form-control" placeholder="{{ $user->title }}">
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>Phone</label>
                                        <input style="color:#b5b0b2;" class="form-control" name="phone" placeholder="{{ $user->phone }}">
                                    </div>
                                    <div class="col-12 col-sm-4 py-2 wow fadeInRight">
                                        <label>Image</label>
                                        <input style="color:#b5b0b2;" type="file" name="image" class="form-control">
                                        @if ($user->image)
                                            <img src="usersImages/{{ $user->image }}" alt="img">
                                        @endif
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
                    </div>
                </div>
            </div>
            @include('Front.users.admin.include.footer') 
        </div>
    </div>