<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>
    <link href={{asset("favicon.ico")}} rel="icon">

    <!-- Custom fonts for this template-->
    <link href="{{asset('sb-admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('sb-admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-7 col-lg-7 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!- - Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class=" font-weight-bold text-gray-900 mb-4">Login</h1>
                                            <p>Guru Dan admin saja</p>
                                            @if(session()->has('berhasil'))
                                            <div class="alert alert-primary alert-dismissible fade show mt-2"
                                                role="alert">
                                                <strong>{{ session('berhasil')}}</strong>
                                            </div>
                                            @endif
                                            @if(session()->has('loginError'))
                                            <div class="alert alert-danger alert-dismissible fade show mt-2"
                                                role="alert">
                                                <strong>{{ session('loginError')}}</strong>
                                            </div>
                                            @endif
                                        </div>
                                        <form class="user" action="{{url('login')}}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <input type="text" name="username"
                                                    class="form-control form-control-user @error('username') is-invalid @enderror"
                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                    placeholder="Username...">
                                                @error('username')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="password" name="password"
                                                    class="form-control form-control-user @error('password') is-invalid @enderror"
                                                    id="exampleInputPassword" placeholder="Password">
                                                @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                                Login
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('sb-admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('sb-admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>