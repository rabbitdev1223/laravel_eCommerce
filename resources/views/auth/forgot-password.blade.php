<x-auth-layout>

    <!--begin::Form-->
    <form class="form w-100" method="POST" action="{{ route('password.email') }}">
        @csrf
        <!--begin::Heading-->
        <div class="mb-10 text-center">
            <!--begin::Title-->
            <h1 class="mb-3 text-dark">Forgot Password ?</h1>
            <!--end::Title-->
            <!--begin::Link-->
            <div class="text-gray-400 fw-bold fs-4">Enter your email to reset your password.</div>
            <!--end::Link-->
        </div>
        <!--begin::Heading-->
        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <label class="text-gray-900 form-label fw-bolder fs-6">Email</label>
            <input class="form-control form-control-solid @error('email') is-invalid @enderror" type="email"
                name="email" :value="old('email')" required autofocus />
            @error('email')
            <div class="invalid-feedback d-block">
                {{ $message }}
            </div>
            @enderror
            @if (session('status'))
            <div class="d-block text-success">
                {{ session('status') }}
            </div>
            @endif
        </div>
        <!--end::Input group-->
        <!--begin::Actions-->
        <div class="flex-wrap d-flex justify-content-center pb-lg-0">
            <button type="submit" class="btn btn-lg btn-primary fw-bolder me-4">
                Email Password Reset Link
            </button>
            <a href="{{ route('login') }}" class="btn btn-lg btn-light-primary fw-bolder">Cancel</a>
        </div>
        <!--end::Actions-->
    </form>
    <!--end::Form-->
</x-auth-layout>
