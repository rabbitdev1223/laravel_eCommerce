<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - #1 Selling Bootstrap 5 HTML Multi-demo Admin Dashboard ThemePurchase: https://1.envato.market/EA4JPWebsite: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.-->
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Metronic Bootstrap 5 Theme | Keenthemes</title>
    <meta name="description"
        content="Metronic admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Metronic, bootstrap, bootstrap 5, Angular 11, VueJs, React, Laravel, admin themes, web design, figma, web development, ree admin themes, bootstrap admin, bootstrap dashboard" />
    <link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-white">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative"
                style="background-color: #F2C98A">
                <!--begin::Wrapper-->
                <div class="top-0 bottom-0 d-flex flex-column position-xl-fixed w-xl-600px scroll-y">
                    <!--begin::Content-->
                    <div class="p-10 text-center d-flex flex-row-fluid flex-column pt-lg-20">
                        <!--begin::Logo-->
                        <a href="index.html" class="py-9">
                            <img alt="Logo" src="{{ asset('assets/media/logos/logo-3.svg') }}" class="h-70px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="pb-5 fw-bolder fs-2qx pb-md-10" style="color: #986923;">Welcome to Metronic</h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="fw-bold fs-2" style="color: #986923;">Discover Amazing Metronic
                            <br />with great build tools</p>
                        <!--end::Description-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Illustration-->
                    <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url({{ asset('assets/media/illustrations/checkout.png') }})"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Aside-->
            <!--begin::Body-->
            <div class="py-10 d-flex flex-column flex-lg-row-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="p-10 mx-auto w-lg-500px p-lg-15">
                        <!--begin::Form-->
                        <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                            <!--begin::Heading-->
                            <div class="mb-10 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3 text-dark">Sign In to Metronic</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">New Here?
                                    <a href="authentication/flows/aside/sign-up.html"
                                        class="link-primary fw-bolder">Create an Account</a></div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="text" name="email"
                                    autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10 fv-row">
                                <!--begin::Wrapper-->
                                <div class="mb-2 d-flex flex-stack">
                                    <!--begin::Label-->
                                    <label class="mb-0 form-label fw-bolder text-dark fs-6">Password</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <a href="authentication/flows/aside/password-reset.html"
                                        class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" type="password"
                                    name="password" autocomplete="off" />
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="mb-5 btn btn-lg btn-primary w-100">
                                    <span class="indicator-label">Continue</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="align-middle spinner-border spinner-border-sm ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                                <!--begin::Separator-->
                                <div class="mb-5 text-center text-muted text-uppercase fw-bolder">or</div>
                                <!--end::Separator-->
                                <!--begin::Google link-->
                                <a href="#" class="mb-5 btn btn-flex flex-center btn-light btn-lg w-100">
                                    <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}"
                                        class="h-20px me-3" />Continue with Google</a>
                                <!--end::Google link-->
                                <!--begin::Google link-->
                                <a href="#" class="mb-5 btn btn-flex flex-center btn-light btn-lg w-100">
                                    <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/facebook-4.svg') }}"
                                        class="h-20px me-3" />Continue with Facebook</a>
                                <!--end::Google link-->
                                <!--begin::Google link-->
                                <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                                    <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/apple-black.svg') }}"
                                        class="h-20px me-3" />Continue with Apple</a>
                                <!--end::Google link-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="flex-wrap p-5 pb-0 d-flex flex-center fs-6">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="https://keenthemes.com/faqs" class="px-2 text-muted text-hover-primary"
                            target="_blank">About</a>
                        <a href="https://keenthemes.com/support" class="px-2 text-muted text-hover-primary"
                            target="_blank">Support</a>
                        <a href="https://1.envato.market/EA4JP" class="px-2 text-muted text-hover-primary"
                            target="_blank">Purchase</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="{{ asset('assets/js/custom/authentication/sign-in/general.js') }}"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
