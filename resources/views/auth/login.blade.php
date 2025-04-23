
<!doctype html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Samudra | Login-Admin</title>
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/assets/images/sb.jpg') }}" type="image/png">
    <!-- loader-->
    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>

    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/metisMenu.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/plugins/metismenu/mm-vertical.css') }}">
    <!--bootstrap css-->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/sass/main.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('backend/sass/dark-theme.css') }}" rel="stylesheet"> --}}
    {{-- <link href="{{ asset('backend/sass/blue-theme.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('backend/sass/responsive.css') }}" rel="stylesheet">

    @yield('css')
</head>

<body>

    <!--authentication-->
    <div class="auth-basic-wrapper d-flex align-items-center justify-content-center">
        <div class="container-fluid my-5 my-lg-0">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5 col-xxl-4 mx-auto">
                    <div class="card rounded-4 mb-0 border-top border-4 border-secondary">
                        <div class="card-body p-5">
                            <h4 class="fw-bold" style="text-align: center">Login</h4>
                            {{-- <p class="mb-0">Enter your credentials to login your account</p> --}}

                            <div class="form-body my-5">
                                <form class="row g-3" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        {{-- <input type="email" class="form-control" id="inputEmailAddress"
                                            placeholder="E-mail" name="email"> --}}
                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <input id="inputEmailAddress" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus placeholder="E-mail">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Password</label>
                                        <div class="input-group" id="show_hide_password">

                                            <div class="input-group" id="show_hide_password2">
                                                <input id="inputChoosePassword" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="new-password"
                                                    placeholder="Enter Password">

                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class="bi bi-eye-slash-fill"></i></a>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- </div> --}}

                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Remember
                                                Me</label>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-md-6 text-end"> <a href="auth-basic-forgot-password.html">Forgot
                                            Password ?</a>
                                    </div> --}}
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit"
                                                class="btn btn-grd-info btn-text-light">Login</button>
                                        </div>
                                    </div>
                                    {{-- <div class="col-12">
                                        <div class="text-start">
                                            <p class="mb-0">Belum punya akun? <a
                                                    href="{{ route('register') }}">Daftar disini</a></p>
                                        </div>
                                    </div> --}}
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
    <!--authentication-->


    <!--plugins-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bi-eye-slash-fill");
                    $('#show_hide_password i').removeClass("bi-eye-fill");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bi-eye-slash-fill");
                    $('#show_hide_password i').addClass("bi-eye-fill");
                }
            });
        });
    </script>

    @yield('js')
    @yield('script')
</body>

</html>
