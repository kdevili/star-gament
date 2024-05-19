

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <title>
       Login
    </title>


    <link rel="canonical" href="https://www.creative-tim.com/product/soft-ui-dashboard-pro" />

    <meta name="keywords" content="">
    <meta name="description" content="">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <script src="{{ asset('42d5adcbca.js') }}" crossorigin="anonymous"></script>
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

    <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.min7016.css?v=1.0.8') }}" rel="stylesheet" />
</head>
<body class="bg-gray-100">


<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" >
{{--        <span class="mask bg-gradient-dark opacity-6"></span>--}}
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mx-auto">
                    <h1 class="  mb-2 mt-5">Welcome!</h1>
{{--                    <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>--}}
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
                <div class="card z-index-0">
                    <div class="card-header text-center pt-4">
                        <h5>Sign in</h5>
                    </div>
                    <div class="card-body">
                        <form role="form" class="text-start" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="container">
                            <div class="row justify-content-center">
                            <div class="form-check form-switch col-6">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="rememberMe">Remember me</label></div>
                                <div class="col-6">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">Sign in</button>
                            </div>
{{--                            <div class="mb-2 position-relative text-center">--}}
{{--                                <p class="text-sm font-weight-bold mb-2 text-secondary text-border d-inline z-index-2 bg-white px-3">--}}
{{--                                    or--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                            <div class="text-center">--}}
{{--                                <button type="button" class="btn bg-gradient-dark w-100 mt-2 mb-4">Sign up</button>--}}
{{--                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer class="footer py-5">
    <div class="container">
{{--        <div class="row">--}}

{{--            <div class="col-lg-8 mx-auto text-center mb-4 mt-2">--}}
{{--                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">--}}
{{--                    <span class="text-lg fab fa-dribbble"></span>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">--}}
{{--                    <span class="text-lg fab fa-twitter"></span>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">--}}
{{--                    <span class="text-lg fab fa-instagram"></span>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">--}}
{{--                    <span class="text-lg fab fa-pinterest"></span>--}}
{{--                </a>--}}
{{--                <a href="javascript:;" target="_blank" class="text-secondary me-xl-4 me-4">--}}
{{--                    <span class="text-lg fab fa-github"></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row">
            <div class="col-8 mx-auto text-center mt-1">
                <p class="mb-0 text-secondary">
                    Copyright © <script>
                        document.write(new Date().getFullYear())
                    </script>
{{--                    Soft by Creative Tim.--}}
                </p>
            </div>
        </div>
    </div>
</footer>


<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>

<script src="{{ asset('assets/js/plugins/dragula/dragula.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jkanban/jkanban.js') }}"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script async defer src="{{ asset('buttons.js') }}"></script>

<script src="{{ asset('assets/js/soft-ui-dashboard.min7016.js?v=1.0.8') }}"></script>
</body>
</html>
