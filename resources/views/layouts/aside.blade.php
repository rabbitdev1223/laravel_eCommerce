<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <meta charset="utf-8" />
    <title>@yield('title') | Aptitude</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    @livewireStyles
    <script src="{{ asset('assets/plugins/custom/draggable/draggable.bundle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"
        integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://media.twiliocdn.com/sdk/js/conversations/releases/1.2.0/twilio-conversations.min.js"
        integrity="sha256-lYzPQyaIqs8RXkKxfQnkDbfiosIrDKs/OsJ2VjCcMc8=" crossorigin="anonymous"></script>

    @stack('styles')
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        @yield('content')
    </div>
    <!--end::Root-->

    <!--begin::Drawers-->
    @include('admin.includes.chat')
    <!--end::Drawers-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
                    <path
                        d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                        fill="#000000" fill-rule="nonzero" />
                </g>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    @livewireScripts
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script>
        Echo.private('orders').listen('OrderCreated', (e) => {
            showNotification(e);
        });

        function showNotification(e) {

            const notification = new Notification('New Order', {
                body: e.user + '\nPO: ' + e.po + '\nTotal: ' + e.total,
                icon: e.avatar,
                // requireInteraction: true, https://jsfiddle.net/drnz12n8/2/
                timestamp: Date.now()
            });

            notification.onclick = (e) => {
                window.location.href = "{{ route('admin.orders.index') }}";
            };
        }

        function showNotification2() {

            const notification2 = new Notification('New Message', {
                timestamp: Date.now()
            });

            notification2.onclick = () => {
                window.location.href = "{{ route('admin.orders.index') }}";
            };
        }

        if (Notification.permission === "granted") {

        } else if (Notification.permission !== "denied") {
            Notification.requestPermission().then(permission => {

            });
        }

        Twilio.Conversations.Client.create('{{ $twilioClientToken }}').then(client => {
            client.on('connectionStateChanged', (state) => {
                if (state === "connecting") {
                    console.log('connecting...');
                }

                if (state === "connected") {
                    console.log('connected!');
                }

                if (state === "disconnecting") {
                    console.log('disconnecting...');
                }

                if (state === "disconnected") {
                    console.log('disconnected!');
                }

                if (state === "denied") {
                    console.log('denied!');
                }
            });

            client.on('messageAdded', (state) => {
                Livewire.emit('refreshMessages', state.author);


                if (state.author != '{{ auth()->user()->first_name.' '.auth()->user()->last_name }}') {

                    showNotification2();
                }
            });

        });
    </script>
    <!--end::Page Custom Javascript-->
    <script>
        window.addEventListener('toastr', event => {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.success(event.detail);
        });

        window.addEventListener('toastr-error', event => {
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-bottom-right",
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            };

            toastr.error(event.detail);
        });

        @if(Session::has('message'))
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.success("{{ session('message') }}");
        @endif
    </script>
    @stack('scripts')
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
