<div class='row pb-10 justify-content-end'>
	<div class='col-xl-6'>
 		<div class="card">
 			<div class="card-body">
 				<form class='form'>
 					<div class="row">
 						<div class="col-lg-3 pt-10">
							<button wire:click="search()" type="button" id="search" class="btn btn-sm btn-light-danger" >Search</button>
						</div>
						<div class="col-lg-7">
							<!--begin::Row-->
							<div class="row">
								<!--begin::Col-->
								<div class="col-lg-6 fv-row fv-plugins-icon-container">
									<label class='form-label'>Initial Date</label> 
									<input wire:model='initial_dt' id="initial_dt" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 calendar" placeholder="Initial Date" value="{{  \Carbon\Carbon::parse($initial_dt)->format('m/d/Y') }}">
									<div class="fv-plugins-message-container invalid-feedback">@error('initial_dt'){{ $message }}@enderror</div>
								
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-6 fv-row fv-plugins-icon-container">
									<label class='form-label'>Final Date</label> 
									<input wire:model='final_dt' id="final_dt" class="form-control form-control-lg form-control-solid calendar" placeholder="Final Date" value="{{  \Carbon\Carbon::parse($final_dt)->format('m/d/Y') }}">
									<div class="fv-plugins-message-container invalid-feedback">@error('final_dt'){{ $message }}@enderror</div>
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						
						<!--end::Col-->
					</div>                         	
             	</form>
 			</div>
 		</div>
	</div>
	
	@push('scripts')
    	<script>
            $(function(){
            	$('.calendar').flatpickr({dateFormat: "m/d/Y"});

            	$('#initial_dt').on('change',function(){
           		 	@this.initial_dt = $(this).val();
           		});

            	$('#final_dt').on('change',function(){
           		 	@this.final_dt = $(this).val();
           		});

//            		$('#search').on('click',function(){

//            			@this.initial_dt = $('#initial_dt').val();
//            			@this.final_dt = $('#final_dt').val();

//            			window.livewire.emit('search');

//            		});
        	});
    	</script>
	@endpush
</div>