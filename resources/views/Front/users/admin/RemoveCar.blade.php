@include('Front.users.admin.include.header')
<div class="container-scroller">
    @include('Front.users.admin.include.sidebar')  ?>
    <div class="container-fluid page-body-wrapper">
        @include('Front.users.admin.include.navbar') ?>
        <div class="main-panel">
            <div class="content-wrapper">
                <section>
                    <table class="table table-dark wrap ">
                        <tr>
                            <td>Name</td>
                            <td>Price</td>
                            <td>Year</td>
                            <td>Description</td>
                            <td>Image</td>
                            <td>Action</td>
                        </tr>
                        @foreach($data as $car)
                        <tr>
                            <td>{{ $car->car_make }} {{ $car->body_type }}</td>
                            <td>{{ $car->price }}</td>
                            <td>{{ $car->car_model }}</td>
                            <td style="max-width: 200px; word-wrap: break-word;" >
                                {{ $car->description }}
                            </td>
                            <td><img style="width: 100px; height:100px"
                                    src="carimages/{{ $car->car_image }}" alt="cars" /></td>
                            <td><a class="btn btn-danger" href="{{ url('remove',$car->id) }}">Remove</a></td>
                        </tr>
                        @endforeach
                    </table>
                </section>
            </div>



            @include('Front.users.admin.include.footer')

       