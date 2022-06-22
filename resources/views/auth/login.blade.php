<x-auth-layout>
    <!--begin::Form-->
    <form class="form w-100" action="{{ route('login') }}" method="POST">
        @csrf
        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="mb-3 text-dark">Login to Evans Enterprises</h1>
            <!--end::Title-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
            <!--end::Label-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                type="text" name="email" :value="old('email')" required autofocus autocomplete="off" tabindex="1" />
            @error('email')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
            @enderror
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

                @if (Route::has('password.request'))
                <!--begin::Link-->
                <a href="{{ route('password.request') }}" class="link-primary fs-6 fw-bolder">Forgot
                    Password ?</a>
                <!--end::Link-->
                @endif
            </div>
            <!--end::Wrapper-->
            <!--begin::Input-->
            <input class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                type="password" name="password" required autocomplete="current-password" tabindex="2" />
            @error('password')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
            @enderror
            <!--end::Input-->
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="text-center">
            <!--begin::Submit button-->
            <button type="submit" class="mb-5 btn btn-lg btn-primary w-100" tabindex="3">
                Sign In
            </button>
            <!--end::Submit button-->
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</x-auth-layout>
