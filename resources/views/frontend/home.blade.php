<x-content>
    <div id="kt_content_container" class="container @if(request()->input('search')) mt-10 @endif">
        <!--begin::Row-->
        <livewire:frontend.home.list-products />
    </div>

    @push('scripts')
    <script>
        let animations = [];

    Livewire.hook('message.received', () => {
        let items = Array.from(document.querySelectorAll('[animate-move]'));

        animations = items.map(item => {
            let oldTop = item.getBoundingClientRect().top;
            let oldLeft = item.getBoundingClientRect().left;

            return () => {
                let newTop = item.getBoundingClientRect().top;
                let newLeft = item.getBoundingClientRect().left;

                gsap.fromTo(item, {x:(oldLeft - newLeft), y:(oldTop - newTop)}, {duration: .5, x:0, y:0})
            }
        }) ;
    });

    Livewire.hook('message.processed', () => {
        while(animations.length) {
            animations.shift()();
        }
    });
    </script>
    @endpush
</x-content>
