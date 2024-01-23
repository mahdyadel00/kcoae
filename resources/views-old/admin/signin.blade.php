<!DOCTYPE html>
<html lang="en">
{{--@include('admin.layouts.topHeader')--}}
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>المكتب الثقافي الكويتي</title>
    <link rel="shortcut icon" href="{{asset('images/kuwait.jpg')}}">
    <link href="{{asset('css/light/loader.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dark/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{asset('js/loader.js')}}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('css/bootstrap.rtl.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/light/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/light/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('css/dark/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dark/authentication/auth-boxed.css')}}" rel="stylesheet" type="text/css" />


</head>
<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<div class="auth-container d-flex">

    <div class="container mx-auto align-self-center">

        <div class="row">

            <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto">
                <div class="card mt-3 mb-3">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-12 mb-3">

                                <h2>تسجيل الدخول</h2>
{{--                                <p>Enter your email and password to login</p>--}}

                            </div>
                            <form method="post" action="login">
                                @csrf
                                @if ($errors->any())

                                    <div class="alert alert-danger">

                                        <ul style="list-style: none;margin:0">

                                            @foreach ($errors->all() as $error)

                                                <li>{{ $error }}</li>

                                            @endforeach

                                        </ul>

                                    </div>

                                @endif
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">البريد الالكتروني</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <label class="form-label">كلمة المرور</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    <button type="submit" class="btn btn-secondary w-100">تسجيل الدخول</button>
                                </div>
                            </div>
                            </form>
{{--                            <div class="col-12 mb-4">--}}
{{--                                <div class="">--}}
{{--                                    <div class="seperator">--}}
{{--                                        <hr>--}}
{{--                                        <div class="seperator-text"> <span>Or continue with</span></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-sm-4 col-12">--}}
{{--                                <div class="mb-4">--}}
{{--                                    <button class="btn  btn-social-login w-100 ">--}}
{{--                                        <img src="../src/assets/img/google-gmail.svg" alt="" class="img-fluid">--}}
{{--                                        <span class="btn-text-inner">Google</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-sm-4 col-12">--}}
{{--                                <div class="mb-4">--}}
{{--                                    <button class="btn  btn-social-login w-100">--}}
{{--                                        <img src="../src/assets/img/github-icon.svg" alt="" class="img-fluid">--}}
{{--                                        <span class="btn-text-inner">Github</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-sm-4 col-12">--}}
{{--                                <div class="mb-4">--}}
{{--                                    <button class="btn  btn-social-login w-100">--}}
{{--                                        <img src="../src/assets/img/twitter.svg" alt="" class="img-fluid">--}}
{{--                                        <span class="btn-text-inner">Twitter</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="col-12">--}}
{{--                                <div class="text-center">--}}
{{--                                    <p class="mb-0">Dont't have an account ? <a href="javascript:void(0);" class="text-warning">Sign Up</a></p>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>
