<div class="card w-100" id="kt_drawer_chat_messenger">
    <!--begin::Card header-->
    <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
        <!--begin::Title-->
        <div class="card-title">
            <!--begin::User-->
            <div class="d-flex justify-content-center flex-column me-3">
                @if ($user)
                <a href="#"
                    class="mb-2 text-gray-900 fs-4 fw-bolder text-hover-primary me-1 lh-1">{{ $user->first_name }}
                    {{ $user->last_name }}</a>
                @endif

                <!--begin::Info-->
                <div class="mb-0 lh-1">
                    <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                    <span class="text-gray-400 fs-7 fw-bold">Active</span>
                </div>
                <!--end::Info-->
            </div>
            <!--end::User-->
        </div>
        <!--end::Title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Close-->
            <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                <!--begin::Svg Icon | path: icons/duotone/Navigation/Close.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                        height="24px" viewBox="0 0 24 24" version="1.1">
                        <g transform="translate(12.000000, 12.000000) rotate(-45.000000) translate(-12.000000, -12.000000) translate(4.000000, 4.000000)"
                            fill="#000000">
                            <rect fill="#000000" x="0" y="7" width="16" height="2" rx="1" />
                            <rect fill="#000000" opacity="0.5"
                                transform="translate(8.000000, 8.000000) rotate(-270.000000) translate(-8.000000, -8.000000)"
                                x="0" y="7" width="16" height="2" rx="1" />
                        </g>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Close-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body" id="kt_drawer_chat_messenger_body">
        <!--begin::Messages-->
        <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true" data-kt-scroll-activate="true"
            data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
            data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
            @if ($messages)
            @forelse ($messages as $message)
            @if (auth()->user()->first_name.' '.auth()->user()->last_name == $message->author)
            <!--begin::Message(out)-->
            <div wire:key='message-sid-{{ $message->sid }}' class="mb-10 d-flex justify-content-end">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column align-items-end">
                    <!--begin::User-->
                    <div class="mb-2 d-flex align-items-center">
                        <!--begin::Details-->
                        <div class="me-3">
                            <span
                                class="mb-1 text-muted fs-7">{{ Carbon\Carbon::parse($message->dateCreated)->diffForHumans() }}</span>
                            <a href="#" class="text-gray-900 fs-5 fw-bolder text-hover-primary ms-1">You</a>
                        </div>
                        <!--end::Details-->
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                            <img alt="Pic"
                                src="{{ route('images', ['type'=>'avatar', 'size'=>35, 'image_id' => auth()->user()->image_id]) }}" />
                        </div>
                        <!--end::Avatar-->
                    </div>
                    <!--end::User-->
                    <!--begin::Text-->
                    <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                        data-kt-element="message-text">{{ $message->body }}</div>
                    <!--end::Text-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Message(out)-->
            @else
            <!--begin::Message(in)-->
            <div wire:key='message-sid-{{ $message->sid }}' class="mb-10 d-flex justify-content-start">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column align-items-start">
                    <!--begin::User-->
                    <div class="mb-2 d-flex align-items-center">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-35px symbol-circle">
                            <img alt="Pic"
                                src="{{ route('images', ['type'=>'avatar', 'size'=>35, 'user_id' => $user->id]) }}" />
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Details-->
                        <div class="ms-3">
                            <a href="#"
                                class="text-gray-900 fs-5 fw-bolder text-hover-primary me-1">{{ $message->author}}</a>
                            <span
                                class="mb-1 text-muted fs-7">{{ Carbon\Carbon::parse($message->dateCreated)->diffForHumans() }}</span>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::User-->
                    <!--begin::Text-->
                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                        data-kt-element="message-text">{{ $message->body }}</div>
                    <!--end::Text-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Message(in)-->
            @endif
            @empty
            NO MESSAGES!
            @endforelse
            @endif



        </div>
        <!--end::Messages-->
    </div>
    <!--end::Card body-->
    <!--begin::Card footer-->
    <div class="pt-4 card-footer" id="kt_drawer_chat_messenger_footer">
        <!--begin::Input-->
        <textarea wire:keydown.enter="sendMessage" wire:model.debounce.500ms="input"
            class="mb-3 form-control form-control-flush @error('input') is-invalid @enderror" rows="1"
            data-kt-element="input" placeholder="Type a message"></textarea>
        @error('input')

        <div class="fv-plugins-message-container invalid-feedback">{{ $message }}</div>
        @enderror
        <!--end::Input-->
        <!--begin:Toolbar-->
        <div class="d-flex flex-stack">
            <!--begin::Actions-->
            <div class="d-flex align-items-center me-2">
                {{-- <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip"
                    title="Coming soon">
                    <i class="bi bi-paperclip fs-3"></i>
                </button>
                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip"
                    title="Coming soon">
                    <i class="bi bi-upload fs-3"></i>
                </button> --}}
            </div>
            <!--end::Actions-->
            <!--begin::Send-->
            <button wire:click="sendMessage" class="btn btn-primary" type="button" data-kt-element="send">Send</button>
            <!--end::Send-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Card footer-->
</div>
