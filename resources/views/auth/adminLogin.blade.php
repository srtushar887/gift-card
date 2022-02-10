<!doctype html>
<html lang="en">


<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jan 2022 13:40:24 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Login | Nazox - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('assets/dashboard/')}}/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="{{asset('assets/dashboard/')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('assets/dashboard/')}}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('assets/dashboard/')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body class="auth-body-bg">
<div>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-4">
                <div class="authentication-page-content p-4 d-flex align-items-center min-vh-100">
                    <div class="w-100">
                        <div class="row justify-content-center">
                            <div class="col-lg-9">
                                <div>
                                    <div class="text-center">
                                        <div>
                                            <a href="index.html" class="">
                                                <img src="{{asset('assets/dashboard/')}}/images/logo-dark.png" alt="" height="20" class="auth-logo logo-dark mx-auto">
                                                <img src="{{asset('assets/dashboard/')}}/images/logo-light.png" alt="" height="20" class="auth-logo logo-light mx-auto">
                                            </a>
                                        </div>

                                        <h4 class="font-size-18 mt-4">Welcome Back !</h4>
                                        <p class="text-muted">Sign in to continue to Nazox.</p>
                                    </div>

                                    <div class="p-2 mt-5">
                                        <form class="" action="{{route('admin.login.submit')}}" method="post">
                                            @csrf

                                            <div class="mb-3 auth-form-group-custom mb-4">
                                                <i class="ri-user-2-line auti-custom-input-icon"></i>
                                                <label for="username">Email</label>
                                                <input type="text" name="email" class="form-control" id="username" placeholder="Enter email">
                                            </div>

                                            <div class="mb-3 auth-form-group-custom mb-4">
                                                <i class="ri-lock-2-line auti-custom-input-icon"></i>
                                                <label for="userpassword">Password</label>
                                                <input type="password" name="password" class="form-control" id="userpassword" placeholder="Enter password">
                                            </div>


                                            <div class="mt-4 text-center">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                                            </div>

                                        </form>
                                    </div>

                                    <div class="mt-5 text-center">
                                        <p>Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Register </a> </p>
                                        <p>© <script>document.write(new Date().getFullYear())</script> Nazox. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="authentication-bg">
                    <div class="bg-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- JAVASCRIPT -->
<script src="{{asset('assets/dashboard/')}}/libs/jquery/jquery.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('assets/dashboard/')}}/libs/node-waves/waves.min.js"></script>

<script src="{{asset('assets/dashboard/')}}/js/app.js"></script>

</body>

<!-- Mirrored from themesdesign.in/nazox-ajax/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 30 Jan 2022 13:40:24 GMT -->
</html>
