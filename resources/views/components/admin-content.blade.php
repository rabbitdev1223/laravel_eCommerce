<x-admin>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">

        {{ $slot }}
        <!--end::Container-->

    </div>
    <!--end::Content-->

	
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


    $(function(){
    	$(".close_modal").on('click',function(e){
        	$($(this).attr('data-modal')).modal('hide'); 
    	});
    });
    </script>
    @endpush
</x-admin>
