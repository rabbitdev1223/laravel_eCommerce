<x-auth-layout>
    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('password.update') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="mb-3 text-dark">Setup New Password</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Already have reset your password ?
                <a href="{{ route('login') }}" class="link-primary fw-bolder">Sign in here</a></div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">Email</label>
                <!--end::Label-->
                <!--begin::Input wrapper-->
                <div class="mb-3 position-relative">
                    <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror"
                        type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    @error('email')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!--end::Input wrapper-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Input group=-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Wrapper-->
            <div class="mb-1">
                <!--begin::Label-->
                <label class="form-label fw-bolder text-dark fs-6">Password</label>
                <!--end::Label-->
                <!--begin::Input wrapper-->
                <div class="mb-3 position-relative">
                    <input
                        class="form-control form-control-lg form-control-solid @error('password') is-invalid @enderror"
                        type="password" name="password" required />
                    @error('password')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <!--end::Input wrapper-->
            </div>
            <!--end::Wrapper-->
            <!--begin::Hint-->
            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
            <!--end::Hint-->
        </div>
        <!--end::Input group=-->
        <!--begin::Input group=-->
        <div class="mb-10 fv-row">
            <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
            <input
                class="form-control form-control-lg form-control-solid @error('password_confirmation') is-invalid @enderror"
                type="password" placeholder="" name="password_confirmation" required />
            @error('password_confirmation')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
            @enderror
        </div>
        <!--end::Input group=-->
        <!--begin::Action-->
        <div class="text-center">
            <button type="submit" class="btn btn-lg btn-primary fw-bolder">
                Reset Password
            </button>
        </div>
        <!--end::Action-->
    </form>
    <!--end::Form-->
</x-auth-layout>
