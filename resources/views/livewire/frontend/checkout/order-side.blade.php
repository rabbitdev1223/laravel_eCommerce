<div class="mb-8 row flex-column align-items-center">
    <div class="col-auto">

        <h1 class="my-1 text-dark fw-bolder fs-3">Your Order</h1>
    </div>
    <div class="col-auto">

        <!--begin::Svg Icon | path: assets/media/icons/duotone/Shopping/Cart1.svg-->
        <span class="svg-icon svg-icon-primary "><svg style="height:15rem !important; width: 15rem !important;"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24" />
                    <path
                        d="M18.1446364,11.84388 L17.4471627,16.0287218 C17.4463569,16.0335568 17.4455155,16.0383857 17.4446387,16.0432083 C17.345843,16.5865846 16.8252597,16.9469884 16.2818833,16.8481927 L4.91303792,14.7811299 C4.53842737,14.7130189 4.23500006,14.4380834 4.13039941,14.0719812 L2.30560137,7.68518803 C2.28007524,7.59584656 2.26712532,7.50338343 2.26712532,7.4104669 C2.26712532,6.85818215 2.71484057,6.4104669 3.26712532,6.4104669 L16.9929851,6.4104669 L17.606173,3.78251876 C17.7307772,3.24850086 18.2068633,2.87071314 18.7552257,2.87071314 L20.8200821,2.87071314 C21.4717328,2.87071314 22,3.39898039 22,4.05063106 C22,4.70228173 21.4717328,5.23054898 20.8200821,5.23054898 L19.6915238,5.23054898 L18.1446364,11.84388 Z"
                        fill="#000000" opacity="0.3" />
                    <path
                        d="M6.5,21 C5.67157288,21 5,20.3284271 5,19.5 C5,18.6715729 5.67157288,18 6.5,18 C7.32842712,18 8,18.6715729 8,19.5 C8,20.3284271 7.32842712,21 6.5,21 Z M15.5,21 C14.6715729,21 14,20.3284271 14,19.5 C14,18.6715729 14.6715729,18 15.5,18 C16.3284271,18 17,18.6715729 17,19.5 C17,20.3284271 16.3284271,21 15.5,21 Z"
                        fill="#000000" />
                </g>
            </svg></span>
        <!--end::Svg Icon-->
    </div>

    <div class="col-auto">

        <div class="text-muted fs-7 fw-bold">{{ $cartCount }}
            {{ Illuminate\Support\Str::plural('product', $cartCount) }} found</div>
    </div>
    <div class="col-12">

        <div class="mt-4 mb-6 border-gray-300 separator w-100"></div>
    </div>
    <div class="col-12">
        <div class="mx-8 row justify-content-between">
            <div class="col-auto">
                <h3 class="card-title text-muted">Subtotal</h3>
            </div>
            <div class="col-auto">
                <span class="text-primary fw-bolder fs-6">${{ number_format($cartTotal / 100, 2) }}</span>
            </div>
        </div>
    </div>
</div>