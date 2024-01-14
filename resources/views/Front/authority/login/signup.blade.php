<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blaise Motors</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('hr/assets/images/logos/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('hr/assets/css/styles.min.css') }}" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a class="text-nowrap logo-img text-center  py-3 w-100">
                                    <h4>Signup</h4>
                                </a>
                                <p class="text-center">Blaise motors company</p> 
                                <form action="{{ url('register') }}" type="post">
                                    <div class="mb-3">
                                        <label class="form-label" >name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" >email</label>
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">password</label>
                                        <input class="form-control" type="password" name="password">
                                    </div>
                                    <button class="btn btn-primary w-100" type="submit">signup</button>
                                </form>
                                <br><br>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-bold">Already have account?</p>
                                    <a class="text-primary fw-bold ms-2" href="{{ url('showLoginForm') }}">Login instead</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
</body>
</html>